<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class EmailVerificationController extends Controller
{
    /**
     * Verify the user's email.
     *
     * @param Request $request
     * @param int $id
     * @param string $hash
     * @return \Inertia\Response
     * @throws AuthorizationException
     */
    public function verify(Request $request, $id, $hash)
    {
        $user = User::findOrFail($id);

        if (!hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            throw new AuthorizationException('Invalid verification link.');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return Inertia::render('Auth/Login', [
            'message' => 'Your email has been verified! You can now log in.'
        ]);
    }
}
