<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Mail\LeadCsvExportMail;
use App\Models\Card;
use App\Models\Lead;
use App\Models\Translation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
class LeadController extends Controller
{

    public function index(Card $card)
    {

        $leads = $card->leads->groupBy(function ($lead) {
            return Carbon::parse($lead->created_at)->format('d/m/Y');
        });

        $translations = Translation::where('language', $card->current_lang)->pluck('text', 'label_key')->toArray();

        $all_langs = Translation::distinct()->pluck('language')->toArray();

        $card->all_langs = $all_langs;

        return Inertia::render('Leads/Index', [
            'card' => $card,
            'leads' => $leads,
            'translations' => $translations,
        ]);
    }

    public function create(Request $request)
    {
        $card_id = $request->query('card_id');
        $card = Card::find($card_id);

        $profile = $card->activeProfile;

        $translations = Translation::where('language', $card->current_lang)->pluck('text', 'label_key')->toArray();

        $all_langs = Translation::distinct()->pluck('language')->toArray();

        $card->all_langs = $all_langs;

        if (!$card) {
            return redirect('/')->with('error', 'Card not found');
        }

        return Inertia::render('Leads/Create', [
            'card' => $card,
            'profile' => $profile,
            'translations' => $translations
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'card_id' => 'required|exists:cards,id',
            'lead_title' => 'nullable|string|max:255',
            'lead_name' => 'required|string|max:255',
            'lead_lastname' => 'required|string|max:255',
            'lead_role' => 'nullable|string|max:255',

            'lead_phone' => 'nullable|string|max:255',
            'lead_mobile_phone' => 'required|string|max:255',
            'lead_email' => 'required|string|email|max:255|unique:leads,lead_email',
            'lead_website' => 'nullable|string|max:255',

            'lead_company_name' => 'required|string|max:255',
            'lead_company_address' => 'nullable|string|max:255',
            'lead_company_zipcode' => 'nullable|string|max:255',
            'lead_company_city' => 'nullable|string|max:255',
            'lead_company_province' => 'nullable|string|max:255',
            'lead_company_country' => 'nullable|string|max:255',
            'lead_company_phone' => 'nullable|string|max:255',
            'lead_company_email' => 'nullable|string|max:255',
            'lead_company_vat' => 'nullable|string|max:255',

        ]);

        $lead = new Lead($validated);
        $lead->card_id = $request->input('card_id');
        $lead->save();

        return redirect()->route('lead.create', ['card_id' => $request->input('card_id')])
            ->with('success', 'Lead created successfully!');
    }

    public function deleteAllLeads(Card $card)
    {
        $card->leads()->delete();

        return redirect()->route('cards.edit', ['card' => $card->id])
            ->with('success', 'Tutti i lead sono stati cancellati con successo!');
    }

    public function sendLeadCsv(Card $card)
    {

        $leads = $card->leads;

        if (count($leads) == 0){
            return redirect()->route('leads.index', ['card' => $card->id])
                ->with('error', 'No leads');
        }

        $csvPath = storage_path('app/leads_' . $card->id . '.csv');

        $file = fopen($csvPath, 'w');
        fputcsv($file, ['Titolo', 'Nome', 'Cognome', 'Ruolo', 'Email', 'Telefono', 'Cellulare', 'Sito Web', 'Azienda', 'Indirizzo', 'CAP', 'Città', 'Provincia', 'Paese', 'Telefono Azienda', 'Email Azienda', 'Partita IVA']);

        foreach ($leads as $lead) {
            fputcsv($file, [
                $lead->lead_title,
                $lead->lead_name,
                $lead->lead_lastname,
                $lead->lead_role,
                $lead->lead_email,
                $lead->lead_phone,
                $lead->lead_mobile_phone,
                $lead->lead_website,
                $lead->lead_company_name,
                $lead->lead_company_address,
                $lead->lead_company_zipcode,
                $lead->lead_company_city,
                $lead->lead_company_province,
                $lead->lead_company_country,
                $lead->lead_company_phone,
                $lead->lead_company_email,
                $lead->lead_company_vat,
            ]);
        }

        fclose($file);

        $ownerEmail = $card->user->email;

        \Mail::to($ownerEmail)->send(new LeadCsvExportMail($csvPath));

        unlink($csvPath);

        return redirect()->route('leads.index', ['card' => $card->id])
            ->with('success', 'Invio LEAD completato');
    }

}
