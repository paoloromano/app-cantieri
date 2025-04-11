<?php

namespace App\Services;

use App\Models\Cantiere;
use App\Traits\HandlesPaginationSorting;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CantiereService
{
    use HandlesPaginationSorting;

    /**
     * Get a list of Cantieri from the database.
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {
        $query = $this->filter($request);
        return $this->sortAndPaginate($request, $query);

    }

    /**
     * Filter the Cantieri query.
     * @param Request $request
     * @return Builder
     */
    public function filter(Request $request): Builder
    {

        $query = Cantiere::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nome', 'like', '%' . $search . '%')
                    ->orWhere('descrizione', 'like', '%' . $search . '%');
            });
        }

        return $query;
    }

    /**
     * Store a Cantiere in the database.
     * @param array $data
     * @return Cantiere
     * @throws Exception
     */
    public function store(array $data): Cantiere
    {
        DB::beginTransaction();
        try {
            $card = Cantiere::create($data);
            DB::commit();
            return $card;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }

    /**
     * Update a Cantiere in the database.
     * @param Cantiere $cantiere
     * @param array $data
     * @return Cantiere
     * @throws Exception
     */
    public function update(Cantiere $cantiere, array $data): Cantiere
    {
        DB::beginTransaction();
        try {
            $cantiere->update($data);
            $cantiere->save();
            DB::commit();
            return $cantiere;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }

    /**
     * Delete a Cantiere from the database.
     * @param Cantiere $cantiere
     * @return void
     * @throws Exception
     */
    public function destroy(Cantiere $cantiere): void
    {
        DB::beginTransaction();
        try {
            $cantiere->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }
}
