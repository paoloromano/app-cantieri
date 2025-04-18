<?php

namespace App\Services;

use App\Models\Dipendente;
use App\Traits\HandlesPaginationSorting;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DipendenteService
{
    use HandlesPaginationSorting;

    /**
     * Get a list of Dipendenti from the database.
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {
        $query = $this->filter($request);
        return $this->sortAndPaginate($request, $query);

    }

    /**
     * Filter the Dipendenti query.
     * @param Request $request
     * @return Builder
     */
    public function filter(Request $request): Builder
    {

        $query = Dipendente::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nome', 'like', '%' . $search . '%')
                    ->orWhere('cognome', 'like', '%' . $search . '%');
            });
        }

        return $query;
    }

    /**
     * Store a Dipendente in the database.
     * @param array $data
     * @return Dipendente
     * @throws Exception
     */
    public function store(array $data): Dipendente
    {
        DB::beginTransaction();
        try {
            $card = Dipendente::create($data);
            DB::commit();
            return $card;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }

    /**
     * Update a Dipendente in the database.
     * @param Dipendente $dipendente
     * @param array $data
     * @return Dipendente
     * @throws Exception
     */
    public function update(Dipendente $dipendente, array $data): Dipendente
    {
        DB::beginTransaction();
        try {
            $dipendente->update($data);
            $dipendente->save();
            DB::commit();
            return $dipendente;
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }

    /**
     * Delete a Dipendente from the database.
     * @param Dipendente $dipendente
     * @return void
     * @throws Exception
     */
    public function destroy(Dipendente $dipendente): void
    {
        DB::beginTransaction();
        try {
            $dipendente->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw $e;
        }
    }
}
