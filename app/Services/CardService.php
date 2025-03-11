<?php

namespace App\Services;

use App\Models\Card;
use App\Traits\HandlesPaginationSorting;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CardService
{
    use HandlesPaginationSorting;

    /**
     * Get a list of Cards from the database.
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {
        $query = $this->filter($request)->with('user');
        return $this->sortAndPaginate($request, $query);

    }

    /**
     * Filter the Cards query.
     * @param Request $request
     * @return Builder
     */
    public function filter(Request $request): Builder
    {

        $query = Card::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('slug', 'like', '%' . $search . '%')
                    ->orWhereHas('user', function ($q) use ($search) {
                        $q->where('email', 'like', '%' . $search . '%')
                            ->orWhere('name', 'like', '%' . $search . '%');
                    });
            });
        }

        return $query;
    }

    /**
     * Store a Card in the database.
     * @param array $data
     * @return Card
     * @throws Exception
     */
    public function store(array $data): Card
    {
        DB::beginTransaction();
        try {
            $card = Card::create($data);
            DB::commit();
            return $card;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }

    /**
     * Update a User in the database.
     * @param Card $card
     * @param array $data
     * @return Card
     * @throws Exception
     */
    public function update(Card $card, array $data): Card
    {
        DB::beginTransaction();
        try {
            $card->update($data);
            $card->save();
            DB::commit();
            return $card;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }

    /**
     * Delete a Card from the database.
     * @param Card $card
     * @return void
     * @throws Exception
     */
    public function destroy(Card $card): void
    {
        DB::beginTransaction();
        try {
            $card->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }
}
