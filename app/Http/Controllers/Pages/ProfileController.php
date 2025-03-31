<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Resources\Profile\ProfileIndex;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Card;
use App\Models\Profile;
use App\Services\ProfileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{

    protected ProfileService $profileService;

    /**
     * Create a new controller instance.
     * @param ProfileService $profileService
     */
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $profile = $this->profileService->index($request);

        return Inertia::render('Profile/Index', [
            'profile'                 => ProfileIndex::collection($profile),
            'session_rows_per_page' => $request->session()->get('rows_per_page', 10),
        ]);
    }

    public function show(Profile $profile)
    {
        $profile->load(['socialNetworks', 'documents', 'images', 'links']);

        return Inertia::render('Profile/Show', [
            'profile' => new ProfileResource($profile),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        $request->user()->save();

        return Redirect::back()->with('success', 'Salvato.');
    }

}
