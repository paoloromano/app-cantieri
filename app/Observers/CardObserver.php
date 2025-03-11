<?php

namespace App\Observers;

use App\Models\Card;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class CardObserver
{
    public function created(Card $card)
    {
        $this->generateQrCode($card);
    }

    public function deleted(Card $card)
    {
        $this->deleteQrCode($card);
    }

    protected function generateQrCode(Card $card)
    {
        try {
            $appUrl = config('app.url');
            $url = $appUrl . '/card/' . $card->slug;
            $qrcode = QrCode::format('png')->size(400)->generate($url);

            $path = 'qrcode/' . $card->slug . '.png';
            Storage::disk('public')->put($path, $qrcode);

            $card->qrcode = $path;
            $card->save();
        } catch (\Exception $e) {
            Log::error('Errore durante la generazione del QR code: ' . $e->getMessage());
        }
    }

    protected function deleteQrCode(Card $card)
    {
        if (Storage::disk('public')->exists($card->qrcode)) {
            Storage::disk('public')->delete($card->qrcode);
        }
    }

    public function incrementViews(Card $card)
    {
        $card->increment('views');
    }
}
