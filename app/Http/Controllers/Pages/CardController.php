<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CardStoreRequest;
use App\Http\Requests\CardUpdateLangRequest;
use App\Http\Requests\CardUpdateRequest;
use App\Http\Requests\UserUpdateEmailPasswordRequest;
use App\Http\Requests\UserUpdateRedirectRequest;
use App\Http\Requests\UserUpdateUrlSettingRequest;
use App\Http\Resources\Card\CardIndex;
use App\Http\Resources\Card\CardResource;
use App\Http\Resources\User\UserResource;
use App\Models\Card;
use App\Models\Profile;
use App\Models\Translation;
use App\Models\User;
use App\Services\CardService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;
use Thenextweb\PassGenerator;

class CardController extends Controller
{
    protected CardService $cardService;

    /**
     * Create a new controller instance.
     * @param CardService $cardService
     */
    public function __construct(CardService $cardService)
    {
        $this->cardService = $cardService;
    }

    private $standardHeaders = [
        'Email Registrazione', 'Nome', 'Cognome', 'Ruolo', 'Ragione Sociale',
        'Indirizzo Principale', 'Indirizzo Secondario', 'CAP', 'Citta', 'Provincia',
        'Nazione', 'Telefono', 'Fax', 'Email Azienda', 'PEC', 'SDI',
        'PIVA', 'Codice Fiscale', 'Telefono Personale', 'Cellulare Personale',
        'Email Personale', 'Website'
    ];

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $cards = $this->cardService->index($request);

        Auth::user()->load('company');

        return Inertia::render('Cards/Index', [
            'cards'                 => CardIndex::collection($cards),
            'baseUrl'              => url('/'),
            'session_rows_per_page' => $request->session()->get('rows_per_page', 10),
        ]);
    }

    /**
     * Display a listing of the resource filtered by company id.
     * @param Request $request
     * @return Response
     */
    public function indexCompany(Request $request): Response
    {

        $user = auth()->user();

        if (!$user->company) {
            abort(403, 'No company linked.');
        }

        $cards = $user->company->cards()->paginate($request->session()->get('rows_per_page', 10));

        return Inertia::render('Cards/Index', [
            'cards'                 => CardIndex::collection($cards),
            'baseUrl'              => url('/'),
            'session_rows_per_page' => $request->session()->get('rows_per_page', 10),
        ]);
    }

    public function show($slug)
    {
        $card = Card::with([
            'user',
            'activeProfile',
            'profiles.socialNetworks',
            'profiles.documents',
            'profiles.links',
            'profiles.images',
        ])
            ->where('slug', $slug)
            ->orWhere('url_setting', $slug)
            ->first();

        if (!$card) {
            return redirect()->route('login');
        }

        $translations = $card->getTranslations();

        if ($card->redirect_status == 1 && !is_null($card->redirect)) {
            return redirect()->away($card->redirect);
        }

        if ($card->url_setting && $slug === $card->slug) {
            return redirect()->route('card.show', ['slug' => $card->url_setting]);
        }

        $user = User::where('id', $card->user_id)->where('id', '!=', 2)->first();
        if (!$user) {
            return redirect()->route('register', ['slug' => $card->slug]);
        } else if (is_null($user->email_verified_at)) {
            return Inertia::render('Auth/VerifyEmail', [
                'userEmail' => $user->email
            ]);
        }

        $card->increment('views');
        $userData = null;
        if (auth()->check() && auth()->id() === $card->user_id) {
            $userData = new UserResource(auth()->user());
        }

        return Inertia::render('Cards/Show', [
            'card'        => new CardResource($card),
            'translation' => $translations,
            'baseUrl'     => url('/'),
            'user'        => $userData,
        ]);
    }

    public function create()
    {
        return inertia('Cards/Create');
    }

    public function store(CardStoreRequest $request): RedirectResponse
    {
        if ($request->number_url > 0) {

            for ($i = 1; $i <= $request->number_url; $i++) {
                $slug = 'T&T' . Str::random(10);
                while (Card::where('slug', $slug)->exists()) {
                    $slug = 'T&T' . Str::random(10);
                }

                $card = Card::create([
                    'slug' => $slug,
                    'user_id' => 2,
                ]);

                $card->profiles()->create([
                    'card_id' => $card->id,
                    'profile_name' => 'Nome',
                    'profile_lastname' => 'Cognome',
                    'profile_role' => 'User',
                    'profile_title' => 'Titolo',
                    'profile_link_color' => '#26ACBE',
                    'profile_button_color' => '#26ACBE',
                    'profile_theme_color' => 'light',
                    'profile_theme_type' => 'balloon',
                    'profile_img_cover_balloon' => 'public/image/0/icon-light-mode.png',
                    'profile_img_cover_hero' => 'public/image/0/icon-light-mode.png',
                    'profile_company_logo' => 'public/image/0/icon-fallback-logo-backend.png',
                    'profile_company_name' => '',
                    'profile_company_first_address' => '',
                    'profile_company_second_address' => '',
                    'profile_zipcode' => '',
                    'profile_city' => '',
                    'profile_province' => '',
                    'profile_country' => '',
                    'profile_company_phone' => '',
                    'profile_company_fax' => '',
                    'profile_company_email' => '',
                    'profile_company_pec' => '',
                    'profile_company_sdi' => '',
                    'profile_company_vat' => '',
                    'profile_company_cf' => '',
                    'profile_bio' => '',
                    'profile_phone' => '',
                    'profile_mobile_phone' => '',
                    'profile_email' => '',
                    'profile_website' => '',
                    'profile_video' => '',
                    'active' => true,
                ]);
            }
        }else{
            return redirect()->route('cards.index')->with('error', 'Enter a value greater than 0.');
        }

        return redirect()->route('cards.index')->with('success', 'Card(s) created.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        $current_user = Auth::user();

        $card->load(['user', 'profiles.socialNetworks', 'profiles.documents', 'profiles.images', 'profiles.links']);

        if ($current_user->id === 1 || $current_user->role_id == 2 || $current_user->id === $card->user_id) {
            return Inertia::render('Cards/Edit', [
                'card'    => new CardResource($card),
                'role_id' => $current_user->role_id,
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Card $card, CardUpdateRequest $request): RedirectResponse
    {

        $user = User::where('id', $request->user_id)->first();

        $additionalData = [];

        if ($user->id > 2) {

            $existingUser = User::where('email', $request->email)->where('id', '!=', $user->id)->first();
            if ($existingUser) {
                return Redirect::back()->withErrors(['email' => 'This email is already taken by another user.']);
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

        } else {

            $existingUser = User::where('email', $request->email)->first();
            if ($existingUser) {

                $existingOtherCard = Card::where('user_id', $existingUser->id)->first();

                if ($existingOtherCard){

                    return Redirect::back()->withErrors(['email' => 'This user already has a card.']);

                }else{
                    $additionalData = [
                        'user_id' => $existingUser->id,
                        'status'  => 1,
                        'activated_at' => now(),
                    ];

                    $existingUser->update([
                        'name' => $request->name,
                    ]);
                }

            } else {

                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make('defaultTT24ps'),
                    'role_id' => 3,
                ]);

                $additionalData = [
                    'user_id' => $user->id,
                    'status' => 1,
                    'activated_at' => now(),
                ];
            }
        }

        $data = array_merge($request->validated(), $additionalData);

        $card->update($data);

        return Redirect::back()->with('success', 'Card updated.');
    }

    public function activateCard(Request $request): RedirectResponse
    {

        $selectedCards = $request->input('cards');

        if ($selectedCards == 'all'){
            Card::query()->update(['status' => 1]);
            return Redirect::back()->with('success', 'All Cards had been activated.');
        }

        Card::whereIn('id', $selectedCards)->update(['status' => 1]);
        return Redirect::back()->with('success', 'Card(s) activated.');

    }

    public function deactivateCard(Request $request): RedirectResponse
    {
        $selectedCards = $request->input('cards');

        if ($selectedCards == 'all'){
            Card::query()->update(['status' => 0]);
            return Redirect::back()->with('success', 'All Cards had been deactivated.');
        }

        Card::whereIn('id', $selectedCards)->update(['status' => 0]);
        return Redirect::back()->with('success', 'Card(s) deactivated.');

    }


    public function exportCard(Request $request): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $selectedCards = $request->input('cards', []);

        if ($selectedCards == 'all') {
            $cards = Card::where('status', 1)->get();
        } else {
            $cards = Card::whereIn('id', $selectedCards)->where('status', 1)->get();
        }

        $fileName = 'cards_export.csv';

        Log::info('Selected Cards:', $cards->toArray());

        $callback = function() use ($cards) {

            $file = fopen('php://output', 'w');

            // Log per capire se arriva qui
            Log::info('Writing header to CSV');

            fputcsv($file, ['Slug', 'QR Code', 'Profile Name', 'Profile Lastname', 'Email']);

            foreach ($cards as $card) {
                $profile = Profile::where('card_id', $card->id)->where('active', 1)->first();
                $user = User::find($card->user_id);

                fputcsv($file, [
                    url('/card/' . $card->slug),
                    url('/storage/' . $card->qrcode),
                    $profile->profile_name,
                    $profile->profile_lastname,
                    $user->email
                ]);
            }

            fclose($file);
            flush();
        };

        return response()->stream($callback, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {

        $cardIds = $request->input('card_ids', []);

        $all = false;

        if ($cardIds[0] == 'a' && $cardIds[1] == 'l' && $cardIds[2] == 'l'){
            $cardIds = Card::query()->get();
            $all = true;
        }

        foreach ($cardIds as $cardId) {

            $card = Card::find($cardId);

            if ($all){
                $card = Card::find($cardId->id);
                $userId = $cardId->user_id;
            }else{
                $userId = $card->user_id;
            }

            $card->delete();

            if ($userId != 2) {

                $user = User::find($userId);

                if ($user) {
                    if ($user->card()->count() == 0) {
                        $user->forceDelete();
                    }
                }
            }
        }

        return Redirect::back()->with('success', 'Card(s) deleted.');
    }

    public function uploadCsv(Request $request)
    {
        $file = $request->file('file');
        $data = array_map(function($line) {
            return str_getcsv($line, ';');
        }, file($file->getRealPath()));

        $headers = array_shift($data);

        if ($headers && count($headers) == count($this->standardHeaders) && $headers === $this->standardHeaders) {

            foreach ($data as $row) {

                $rowData = array_combine($headers, $row);

                $email = $rowData['Email Registrazione'];

                if ($email === '') continue;

                $existingUser = User::where('email', $email)->first();
                if ($existingUser) {
                    /*return back()->withErrors([
                        'error' => $email . ' already in DB.',
                    ]);*/
                    continue;
                }

                $slug = 'T&T' . Str::random(10);
                while (Card::where('slug', $slug)->exists()) {
                    $slug = 'T&T' . Str::random(10);
                }

                $profile_name = $rowData['Nome'];
                $profile_lastname = $rowData['Cognome'];
                $profile_role = $rowData['Ruolo'];
                $profile_title = '';
                $profile_company_name = $rowData['Ragione Sociale'];
                $profile_company_first_address = $rowData['Indirizzo Principale'];
                $profile_company_second_address = $rowData['Indirizzo Secondario'];
                $profile_zipcode = $rowData['CAP'];
                $profile_city = $rowData['Citta'];
                $profile_province = $rowData['Provincia'];
                $profile_country = $rowData['Nazione'];
                $profile_company_phone = $rowData['Telefono'];
                $profile_company_fax = $rowData['Fax'];
                $profile_company_email = $rowData['Email Azienda'];
                $profile_company_pec = $rowData['PEC'];
                $profile_company_sdi = $rowData['SDI'];
                $profile_company_vat = $rowData['PIVA'];
                $profile_company_cf = $rowData['Codice Fiscale'];
                $profile_phone = $rowData['Telefono Personale'];
                $profile_mobile_phone = $rowData['Cellulare Personale'];
                $profile_email = $rowData['Email Personale'];
                $profile_website = $rowData['Website'];

                $password = $rowData['password'] ?? $slug;

                $user = User::create([
                    'name'              => $profile_name,
                    'email'             => $email,
                    'password'          => Hash::make($password),
                    'role_id'           => 3,
                    'email_verified_at' => Carbon::now(),
                ]);

                $card = Card::create([
                    'slug'              => $slug,
                    'status'            => 1,
                    'activated_at'      => Carbon::now(),
                    'user_id'           => $user->id,
                ]);

                $card->profiles()->create([
                    'card_id' => $card->id,
                    'profile_name' => $profile_name,
                    'profile_lastname' => $profile_lastname,
                    'profile_role' => $profile_role,
                    'profile_title' => $profile_title,
                    'profile_link_color' => '#26ACBE',
                    'profile_button_color' => '#26ACBE',
                    'profile_theme_color' => 'light',
                    'profile_theme_type' => 'balloon',
                    'profile_img_cover_balloon' => 'public/image/0/icon-light-mode.png',
                    'profile_img_cover_hero' => 'public/image/0/icon-light-mode.png',
                    'profile_company_logo' => 'public/image/0/icon-fallback-logo-backend.png',
                    'profile_company_name' => $profile_company_name,
                    'profile_company_first_address' => $profile_company_first_address,
                    'profile_company_second_address' => $profile_company_second_address,
                    'profile_zipcode' => $profile_zipcode,
                    'profile_city' => $profile_city,
                    'profile_province' => $profile_province,
                    'profile_country' => $profile_country,
                    'profile_company_phone' => $profile_company_phone,
                    'profile_company_fax' => $profile_company_fax,
                    'profile_company_email' => $profile_company_email,
                    'profile_company_pec' => $profile_company_pec,
                    'profile_company_sdi' => $profile_company_sdi,
                    'profile_company_vat' => $profile_company_vat,
                    'profile_company_cf' =>  $profile_company_cf,
                    'profile_bio' => '',
                    'profile_phone' => $profile_phone,
                    'profile_mobile_phone' => $profile_mobile_phone,
                    'profile_email' => $profile_email,
                    'profile_website' => $profile_website,
                    'profile_video' => '',
                    'active' => true,
                ]);

            }

            return redirect()->route('cards.index')->with('success', 'Card(s) uploaded.');

        }else{
            $missingHeaders = array_diff($this->standardHeaders, $headers);
            $extraHeaders = array_diff($headers, $this->standardHeaders);
            return back()->withErrors([
                'error' => 'Problems with CSV.',
                'missing_headers' => $missingHeaders,
                'extra_headers' => $extraHeaders
            ]);
        }
    }

    public function editUrlSetting($id)
    {
        $card = Card::findOrFail($id);
        $translations = Translation::where('language', $card->current_lang)->pluck('text', 'label_key')->toArray();
        $all_langs = Translation::distinct()->pluck('language')->toArray();
        $card->all_langs = $all_langs;
        return Inertia::render('Cards/EditUrlSetting', ['card' => $card, 'translations' => $translations]);
    }

    public function editEmailPassword($id)
    {
        $card = Card::findOrFail($id);
        $translations = Translation::where('language', $card->current_lang)->pluck('text', 'label_key')->toArray();
        $all_langs = Translation::distinct()->pluck('language')->toArray();
        $card->all_langs = $all_langs;
        return Inertia::render('Cards/EditEmailPassword', [
            'card' => $card,
            'translations' => $translations,
        ]);
    }

    public function editActiveProfile($id)
    {

        $card = Card::findOrFail($id);
        $card->load(['user', 'profiles.socialNetworks', 'profiles.documents', 'profiles.images', 'profiles.links']);
        $all_langs = Translation::distinct()->pluck('language')->toArray();
        $card->all_langs = $all_langs;
        return Inertia::render('Cards/EditActiveProfile', ['card' => new CardResource($card)]);
    }

    public function editContentAppearance($id, Request $request)
    {
        $card = Card::findOrFail($id);
        $card->load(['user', 'profiles.socialNetworks', 'profiles.documents', 'profiles.images', 'profiles.links']);

        $profileId = $request->query('profile_id');
        if (!$profileId) {
            $activeProfile = $card->profiles->firstWhere('active', 1);
            $profileId = $activeProfile ? $activeProfile->id : null;
        }
        $all_langs = Translation::distinct()->pluck('language')->toArray();
        $card->all_langs = $all_langs;
        return Inertia::render('Cards/EditContentAppearance', [
            'card' => new CardResource($card),
            'profile_id' => $profileId
        ]);
    }

    public function editRedirect($id)
    {
        $card = Card::findOrFail($id);
        $translations = Translation::where('language', $card->current_lang)->pluck('text', 'label_key')->toArray();
        $all_langs = Translation::distinct()->pluck('language')->toArray();
        $card->all_langs = $all_langs;
        return Inertia::render('Cards/EditRedirect', ['card' => $card, 'translations' => $translations, 'all_langs' => $all_langs]);
    }

    // Update url_setting info
    public function updateUrlSetting(UserUpdateUrlSettingRequest $request, Card $card)
    {
        $validated = $request->validated();

        if (isset($validated['url_setting'])) {
            $validated['url_setting'] = Str::slug($validated['url_setting']);
        }

        $card->update($validated);

        return Redirect::back()->with('success', 'URL setting updated.');
    }

    // Update redirect info
    public function updateRedirect(UserUpdateRedirectRequest $request, Card $card)
    {
        $validatedData = $request->validated();

        if (!empty($validatedData['redirect']) && !preg_match('/^https?:\/\//i', $validatedData['redirect'])) {
            $validatedData['redirect'] = 'https://' . $validatedData['redirect'];
        }
        $card->update($validatedData);

        return Redirect::back()->with('success', 'Redirect aggiornato.');
    }

    // Update mail e password from be card
    public function updateEmailPassword(UserUpdateEmailPasswordRequest $request, Card $card)
    {
        $user = $card->user;

        $user->email = $request->input('email');

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        return Redirect::back()->with('success', 'Email e Password aggiornate con successo.');
    }

    public function updateCurrentLang(CardUpdateLangRequest $request, Card $card)
    {
        $validatedData = $request->validated();

        if (!empty($validatedData['lang'])) {
            $validatedData['current_lang'] = Str::slug($validatedData['lang']);
        }

        try {
            $card->update(['current_lang' => $validatedData['current_lang']]);
            return Inertia::location(route('cards.edit', $card->id));
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['msg' => 'Errore durante l\'aggiornamento della lingua.']);
        }
    }

    public function generateWalletPass($id)
    {
        $card = Card::with('activeProfile')->findOrFail($id);

        if (!$card->activeProfile) {
            return response()->json(['error' => 'No active profile found'], 404);
        }

        $is_balloons = $card->activeProfile->profile_theme_type == 'balloon';

        if ($is_balloons) {
            $profile_img = $card->activeProfile->profile_img_cover_balloon;
        } else {
            $profile_img = $card->activeProfile->profile_img_cover_hero;
        }

        $walletData = [
            'id' => $card->id,
            'name' => $card->activeProfile->profile_name . ' ' . $card->activeProfile->profile_lastname,
            'role' => $card->activeProfile->profile_role,
            'email' => $card->activeProfile->profile_email,
            'phone' => $card->activeProfile->profile_mobile_phone,
            'slug' => $card->slug,
            'profile_img' => base_path($profile_img),
            'qr_code_url' => url("/card/{$card->slug}"),
            'logo_url' => base_path('storage/logo.png'),
            'company' => $card->activeProfile->profile_company_name,
        ];

        return $this->generateAppleWalletPass($walletData);
    }

    private function generateAppleWalletPass($data)
    {

        $directory = storage_path("app/public/apple-wallet");
        $filename = "{$data['slug']}.pkpass";
        $file_path = "{$directory}/{$filename}";

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        $pass_identifier = $data['slug'];
        $pass = new PassGenerator($pass_identifier);

        $pass_definition = [
            "description"        => "TCard Teikei",
            "formatVersion"      => 1,
            "organizationName"   => $data['company'],
            "passTypeIdentifier" => "pass.it.nfcbusinesscard.app",
            "serialNumber"       => $data['slug'] . time(),
            "teamIdentifier"     => "3242H47X52",
            "foregroundColor"    => "rgb(99, 99, 99)",
            "backgroundColor"    => "rgb(232, 231, 224)",
            "barcode" => [
                "format" => "PKBarcodeFormatQR",
                "message" => $data['qr_code_url'],
                "messageEncoding" => "iso-8859-1",
            ],
            "generic" => [
                "headerFields" => [
                    [
                        "key" => "header",
                        "label" => "Powered by",
                        "value" => "Teikei",
                    ],
                ],
                "primaryFields" => [
                    [
                        "key" => "primary",
                        "label" => "Owner",
                        "value" => $data['name'],
                    ],
                ],
                "secondaryFields" => [
                    [
                        "key" => "secondary",
                        "label" => "Company",
                        "value" => $data['company'],
                    ],

                ],
                "auxiliaryFields" => [
                    [
                        "key" => "auxiliary",
                        "label" => "Role",
                        "value" => $data['role'],
                    ]
                ],
            ],
        ];

        $pass->setPassDefinition($pass_definition);

        $pass->addAsset(base_path('apple/icon.png'));
        $pass->addAsset(base_path('apple/logo.png'));

        $pkpass = $pass->create();

        file_put_contents($file_path, $pkpass);

        $public_url = url(Storage::url("apple-wallet/{$filename}"));

        return response()->json([
            'success' => true,
            'url' => $public_url,
        ]);
    }

}
