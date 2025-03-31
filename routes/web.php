<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Pages\CardController;
use App\Http\Controllers\Pages\ProfileController;
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

    return redirect()->route('cards.index');
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

//Auth
Route::middleware('auth')->group(function () {

    //Verified
    Route::middleware(['verified'])->group(function () {

        Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update');

        //BE card
        Route::get('cards/{card}/edit', [CardController::class, 'edit'])->name('cards.edit');
        Route::put('cards/{card}', [CardController::class, 'update'])->name('cards.update');


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

        // Authentication
        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
        Route::put('password', [PasswordController::class, 'update'])->name('password.update');
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    });
});


