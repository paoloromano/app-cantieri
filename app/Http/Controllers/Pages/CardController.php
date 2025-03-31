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

}
