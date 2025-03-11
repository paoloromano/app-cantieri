<?php

namespace App\Services;

use App\Models\User;
use App\Traits\HandlesPaginationSorting;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserService
{
    use HandlesPaginationSorting;

    /**
     * Get a list of Users from the database.
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {
        return $this->sortAndPaginate($request, $this->filter($request));
    }

    /**
     * Filter the Users query.
     * @param Request $request
     * @return Builder
     */
    public function filter(Request $request): Builder
    {
        $query = User::query();

        if ($request->filled('search'))
            $query->where(function ($q) use ($request) {
                $q->where('users.name', 'like', '%' . $request->search . '%')
                    ->orWhere('users.lastname', 'like', '%' . $request->search . '%')
                        ->orWhere('users.email', 'like', '%' . $request->search . '%');
            });

        return $query;
    }

    /**
     * Store a User in the database.
     * @param array $data
     * @return User
     * @throws Exception
     */
    public function store(array $data): User
    {
        DB::beginTransaction();
        try {
            $user = User::create($data);
            DB::commit();
            return $user;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }

    /**
     * Update a User in the database.
     * @param User $user
     * @param array $data
     * @return User
     * @throws Exception
     */
    public function update(User $user, array $data): User
    {
        DB::beginTransaction();
        try {
            $user->update($data);
            $user->save();
            DB::commit();
            return $user;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }

    /**
     * Delete a User from the database.
     * @param User $user
     * @return void
     * @throws Exception
     */
    public function destroy(User $user): void
    {
        DB::beginTransaction();
        try {
            $user->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }
}
