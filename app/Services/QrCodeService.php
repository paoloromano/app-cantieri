<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeService
{
    /**
     * Genera un QR code per uno specifico slug e lo salva su storage pubblico.
     *
     * @param string $slug
     * @return void
     */
    public function generateQrCodeBySlug(string $slug)
    {
        try {

            $appUrl = config('app.url');
            $url = $appUrl . '/card/' . $slug;

            // Genera il QR code
            $qrcode = QrCode::format('png')->size(400)->generate($url);

            $path = 'qrcode/' . $slug . '.png';
            Storage::disk('public')->put($path, $qrcode);

        } catch (\Exception $e) {
            Log::error('Errore durante la generazione del QR code: ' . $e->getMessage());
        }
    }
}
