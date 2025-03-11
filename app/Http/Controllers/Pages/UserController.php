<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserDeleteRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\User\UserIndex;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    protected UserService $userService;

    /**
     * Create a new controller instance.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $users = $this->userService->index($request);

        return Inertia::render('Users/Index', [
            'users'                 => UserIndex::collection($users),
            'session_rows_per_page' => $request->session()->get('rows_per_page', 10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return Inertia::render('Users/Create');
    }

    public function store(UserStoreRequest $request): RedirectResponse
    {
        $user = Auth::user()->account->users()->create(
            $request->validated()
        );

        return Redirect::route('users')->with('success', 'User created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return Inertia::render('Users/Edit', [
            'user' => new UserResource($user),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user, UserUpdateRequest $request): RedirectResponse
    {
        $user->update(
            $request->validated()
        );

        if ($request->hasFile('photo')) {
            $user->update([
                'photo' => $request->file('photo')->store('users'),
            ]);
        }

        return Redirect::back()->with('success', 'User updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, UserDeleteRequest $request): RedirectResponse
    {
        $user->delete();

        return Redirect::back()->with('success', 'User deleted.');
    }

    public function all()
    {
        return response()->json(User::select('id', 'email', 'role_id', 'temp_url')
            ->where('role_id', 3) //not work todo
            ->get());
    }

    public function get(User $user)
    {
        return response()->json($user->only('id', 'name', 'role_id'));
    }
}
