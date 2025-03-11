<?php

use App\Http\Controllers\Api\AttachmentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Pages\CardController;
use App\Http\Controllers\Pages\CompanyController;
use App\Http\Controllers\Pages\LeadController;
use App\Http\Controllers\Pages\ProfileController;
use App\Http\Controllers\Pages\TranslationController;
use App\Http\Controllers\Pages\UserController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Gestione Redirect Homepage
Route::get('/', function () {

    $user = Auth::user();

    if (!$user) return redirect()->route('login');

    if ($user->role_id === 3){
        $card = $user->card;
        if ($card) {
            return redirect()->route('card.show', ['slug' => $card->slug]);
        }
    }else if ($user->role_id === 1){
        return redirect()->route('cards.index');
    }else{
        return redirect()->route('login');
    }
});

//Guest
Route::middleware('guest')->group(function () {

    // Authentication
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.store');

    // Email Verification Routes
    Route::get('/email/verify', function () {
        return Inertia::render('Auth/VerifyEmail');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
        ->middleware(['signed'])
        ->name('verification.verify');

    Route::post('/email/resend', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware('throttle:6,1')->name('verification.send');

});

//FE
Route::get('/card/{slug}', [CardController::class, 'show'])->name('card.show');
Route::get('/lead/create', [LeadController::class, 'create'])->name('lead.create');
Route::post('/lead/store', [LeadController::class, 'store'])->name('lead.store');

//Auth
Route::middleware('auth')->group(function () {

    //Verified
    Route::middleware(['verified'])->group(function () {

        Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update');

        //BE card
        Route::get('cards/{card}/edit', [CardController::class, 'edit'])->name('cards.edit');
        Route::put('cards/{card}', [CardController::class, 'update'])->name('cards.update');

        Route::get('cards/{id}/edit-email-password', [CardController::class, 'editEmailPassword'])->name('cards.edit-email-password');
        Route::patch('/cards/{card}/edit-email-password', [CardController::class, 'updateEmailPassword'])->name('cards.updateEmailPassword');

        Route::patch('/cards/{card}/edit-current-lang', [CardController::class, 'updateCurrentLang'])->name('cards.updateCurrentLang');

        Route::get('cards/{id}/edit-active-profile', [CardController::class, 'editActiveProfile'])->name('cards.edit-active-profile');
        Route::post('/cards/{id}/update-active-profile', [ProfileController::class, 'updateActiveProfile'])->name('update-active-profile');
        Route::post('/cards/{id}/set-active-profile-fe', [ProfileController::class, 'setActiveProfileFE'])->name('cards.set-active-profile-fe');
        Route::post('/profiles/{id}/duplicate-profile', [ProfileController::class, 'duplicateProfile'])->name('duplicate-profile');
        Route::post('/profiles/{id}/delete-profile', [ProfileController::class, 'deleteProfile'])->name('delete-profile');
        Route::patch('/profiles/{id}/update-basically-info-profile', [ProfileController::class, 'updateBasicallyInfoProfile'])->name('update-basically-info-profile');
        Route::patch('/profiles/{id}/update-appearance-profile', [ProfileController::class, 'updateAppearanceProfile'])->name('update-appearance-profile');

        Route::patch('/profiles/{id}/update-is-company-collapsed', [ProfileController::class, 'updateIsCompanyCollapsed'])->name('update-is-company-collapsed');
        Route::patch('/profiles/{id}/update-is-bio-collapsed', [ProfileController::class, 'updateIsBioCollapsed'])->name('update-is-bio-collapsed');
        Route::patch('/profiles/{id}/update-is-contacts-collapsed', [ProfileController::class, 'updateIsContactsCollapsed'])->name('update-is-contacts-collapsed');
        Route::patch('/profiles/{id}/update-is-documents-collapsed', [ProfileController::class, 'updateIsDocumentsCollapsed'])->name('update-is-documents-collapsed');
        Route::patch('/profiles/{id}/update-is-videos-collapsed', [ProfileController::class, 'updateIsVideosCollapsed'])->name('update-is-videos-collapsed');
        Route::patch('/profiles/{id}/update-is-images-collapsed', [ProfileController::class, 'updateIsImagesCollapsed'])->name('update-is-images-collapsed');
        Route::patch('/profiles/{id}/update-is-links-collapsed', [ProfileController::class, 'updateIsLinksCollapsed'])->name('update-is-links-collapsed');

        Route::patch('/profiles/{id}/update-company-info-profile', [ProfileController::class, 'updateCompanyInfoProfile'])->name('update-company-info-profile');

        Route::patch('/profiles/{id}/update-bio-profile', [ProfileController::class, 'updateBioProfile'])->name('update-bio-profile');
        Route::patch('/profiles/{id}/update-contacts-profile', [ProfileController::class, 'updateContactsProfile'])->name('update-contacts-profile');
        Route::patch('/profiles/{id}/update-video-profile', [ProfileController::class, 'updateVideoProfile'])->name('update-video-profile');
        Route::post('profiles/{id}/create-document', [ProfileController::class, 'createDocument'])->name('create-document');
        Route::post('profiles/{id}/update-document', [ProfileController::class, 'updateDocument'])->name('update-document');
        Route::post('/documents/{id}/delete-document', [ProfileController::class, 'deleteDocument'])->name('delete-document');
        Route::post('profiles/{id}/create-social', [ProfileController::class, 'createSocial'])->name('create-social');
        Route::post('profiles/{id}/update-social', [ProfileController::class, 'updateSocial'])->name('update-social');
        Route::post('/social-networks/{id}/delete-social', [ProfileController::class, 'deleteSocial'])->name('delete-social');
        Route::post('profiles/{id}/create-link', [ProfileController::class, 'createLink'])->name('create-link');
        Route::post('profiles/{id}/update-link', [ProfileController::class, 'updateLink'])->name('update-link');
        Route::post('/links/{id}/delete-link', [ProfileController::class, 'deleteLink'])->name('delete-link');

        Route::post('profiles/{id}/create-image', [ProfileController::class, 'createImage'])->name('create-image');
        Route::post('/images/{id}/delete-image', [ProfileController::class, 'deleteImage'])->name('delete-image');

        Route::post('profiles/{id}/create-logo-image', [ProfileController::class, 'createLogoImage'])->name('create-logo-image');
        Route::post('/profiles/{id}/delete-logo-image', [ProfileController::class, 'deleteLogoImage'])->name('delete-logo-image');

        Route::post('profiles/{id}/create-cover-balloon-image', [ProfileController::class, 'createCoverBalloonImage'])->name('create-cover-balloon-image');
        Route::post('/profiles/{id}/delete-cover-balloon-image', [ProfileController::class, 'deleteCoverBalloonImage'])->name('delete-cover-balloon-image');

        Route::post('profiles/{id}/create-cover-hero-image', [ProfileController::class, 'createCoverHeroImage'])->name('create-cover-hero-image');
        Route::post('/profiles/{id}/delete-cover-hero-image', [ProfileController::class, 'deleteCoverHeroImage'])->name('delete-cover-hero-image');

        Route::get('cards/{id}/edit-content-appearance', [CardController::class, 'editContentAppearance'])->name('cards.edit-content-appearance');
        Route::post('/cards/{id}/create-profile', [ProfileController::class, 'createProfile'])->name('create-profile');
        Route::get('cards/{id}/edit-url-setting', [CardController::class, 'editUrlSetting'])->name('cards.edit-url-setting');
        Route::patch('/cards/{card}/url-setting', [CardController::class, 'updateUrlSetting'])->name('cards.updateUrlSetting');
        Route::get('cards/{id}/edit-redirect', [CardController::class, 'editRedirect'])->name('cards.edit-redirect');
        Route::patch('/cards/{card}/redirect', [CardController::class, 'updateRedirect'])->name('cards.updateRedirect');
        Route::get('/cards/{card}/leads', [LeadController::class, 'index'])->name('leads.index');
        Route::delete('/cards/{card}/leads', [LeadController::class, 'deleteAllLeads'])->name('lead.deleteAll');
        Route::post('/cards/{card}/send-lead-csv', [LeadController::class, 'sendLeadCsv'])->name('lead.sendCsv');

        Route::get('/card/{id}/wallet', [CardController::class, 'generateWalletPass']);


        Route::post('/cards/export', [CardController::class, 'exportCard'])->name('cards.export');

        //Role: CARD -> possessore card
        Route::middleware('role:card')->group(function () {

        });

        //Role: ADMIN -> company -> gestire le card SOLO legate alla sua azienda
        Route::middleware(['auth', 'role:admin'])->group(function () {
            Route::get('company/cards', [CardController::class, 'indexCompany'])->name('cards.index-company');
            Route::post('/company/{id}/upload-logo', [CompanyController::class, 'uploadLogo'])->name('company.uploadLogo');
            Route::post('/company/{id}/delete-logo', [CompanyController::class, 'deleteLogo'])->name('company.deleteLogo');
        });

        //Role: SUPER-ADMIN -> owner
        Route::middleware('role:super-admin')->group(function () {

            Route::get('users', [UserController::class, 'index'])->name('users.index');
            Route::post('users', [UserController::class, 'store'])->name('users.store');
            Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
            Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
            Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

            Route::get('cards', [CardController::class, 'index'])->name('cards.index');
            Route::get('cards/create', [CardController::class, 'create'])->name('cards.create');
            Route::post('cards', [CardController::class, 'store'])->name('cards.store');
            Route::post('/cards/destroy', [CardController::class, 'destroy'])->name('cards.destroy');
            Route::post('/upload-csv', [CardController::class, 'uploadCsv'])->name('cards.uploadCsv');
            Route::post('cards/activate', [CardController::class, 'activateCard'])->name('cards.activate');
            Route::post('cards/deactivate', [CardController::class, 'deactivateCard'])->name('cards.deactivate');

            Route::post('/super-admin-company/{id}/upload-logo', [CompanyController::class, 'uploadLogo'])->name('super-admin.company.uploadLogo');
            Route::post('/super-admin-company/{id}/delete-logo', [CompanyController::class, 'deleteLogo'])->name('super-admin.company.deleteLogo');

            Route::post('/upload-csv-lang', [TranslationController::class, 'uploadCsvLang'])->name('uploadCsvLang');

            Route::get('/generate-qrcode/{slug}', function ($slug) {
                (new App\Services\QrCodeService())->generateQrCodeBySlug($slug);
                return 'QR Code generato';
            });

        });

        // Authentication
        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
        Route::put('password', [PasswordController::class, 'update'])->name('password.update');
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    });
});


