<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class LeadCsvExportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $csvPath;

    /**
     * Create a new message instance.
     */
    public function __construct($csvPath)
    {
        $this->csvPath = $csvPath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Lead CSV Export',
        );
    }

    /*
    public function content(): Content
    {
        return new Content(
            view: '',
        );
    }
    public function attachments(): array
    {
        return [];
    }*/

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Esportazione Lead')
            ->view('emails.lead_csv_export')
            ->attach($this->csvPath, [
                'as' => 'leads.csv',
                'mime' => 'text/csv',
            ]);
    }
}
