<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Mail\LeadCsvExportMail;
use App\Models\Card;
use App\Models\Lead;
use App\Models\Translation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
class TranslationController extends Controller
{

    public function getAllTranslations()
    {
        $translations = Translation::all()->groupBy('language')->map(function ($items) {
            return $items->pluck('text', 'label_key');
        });

        return response()->json($translations);
    }

    public function uploadCsvLang(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048',
        ]);

        $file = $request->file('file');

        if (($handle = fopen($file, 'r')) !== false) {

            $header = fgetcsv($handle, 1000, ';');

            while (($data = fgetcsv($handle, 1000, ';')) !== false) {
                $key = $data[0];
                $translations = [
                    'it' => $data[1] ?? null,
                    'en' => $data[2] ?? null,
                    'fr' => $data[3] ?? null,
                    'de' => $data[4] ?? null,
                    'es' => $data[5] ?? null,
                    'pt' => $data[6] ?? null,
                ];

                foreach ($translations as $language => $text) {
                    if ($text) {
                        Translation::updateOrCreate(
                            ['label_key' => $key, 'language' => $language],
                            ['text' => $text]
                        );
                    }
                }
            }
            fclose($handle);

            return redirect()->route('cards.index')->with('success', 'Lang(s) uploaded.');
        }else{
            return back()->withErrors([
                'error' => 'Problems with lang\'s CSV.'
            ]);
        }

    }

}
