<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request): Response
    {

        $slug = $request->slug;

        if (!$slug) {
            return Inertia::render('Auth/Error');
        }

        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Response
    {
        $request->validate([
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'privacy' => 'accepted',
        ]);

        $slug = $request->slug;

        if (!$slug)
            return Inertia::render('Auth/Login');

        //Create user
        $user = User::create([
            'name' => 'name',
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => '3', //role "card"
        ]);

        $card = Card::where('slug', $slug)->first();
        if ($card){

            $card->update([
                'activated_at' => Carbon::now(),
                'status' => 1,
                'user_id' => $user->id
            ]);

        }

        $user->load('role');

        //Auth::login($user);

        event(new Registered($user));

        return Inertia::render('Auth/VerifyEmail', [
            'userEmail' => $user->email
        ]);
    }
}
