<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class  AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'status' => session('status'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $request->authenticate();

        $user = Auth::user();

        Log::info($user);

        if (is_null($user->email_verified_at)) {
            Auth::logout();
            return redirect()->route('verification.notice', ['userEmail' => $user->email])
                ->with('error', 'You must verify your account to access.');
        }

        $request->session()->regenerate();

        $user = Auth::user();
        if ($user->hasRole('super-admin')) {
            return redirect()->route('cards.index');
        } elseif ($user->hasRole('card')) {

            $card = $user->card;

            if ($card) {
                return Redirect::route('cards.edit', ['card' => $card->id]);
            } else {
                Auth::logout();
                return Redirect::route('login')->with('error', 'No card found for this user.');
            }
        }else if ($user->hasRole('admin')) {
            return redirect()->route('cards.index-company');
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
