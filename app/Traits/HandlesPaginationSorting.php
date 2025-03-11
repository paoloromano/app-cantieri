<?php

namespace App\Traits;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

trait HandlesPaginationSorting
{
    /**
     * Apply pagination and sorting to an Eloquent query builder.
     *
     * @param Request $request
     * @param Builder $query
     * @return LengthAwarePaginator
     */
    public function sortAndPaginate(Request $request, Builder $query): LengthAwarePaginator
    {
        $rowsPerPage = $this->rowsPerPage($request);
        list($sortColumn, $sortDirection) = $this->sorting($request);
        return $query->orderBy($sortColumn, $sortDirection)->paginate($rowsPerPage);
    }

    /**
     * Sets the number of rows per page from the request and stores it in the session.
     * Returns the number of rows per page.
     *
     * @param Request $request
     * @return int
     */
    protected function rowsPerPage(Request $request): int
    {
        if ($request->filled('rows_per_page'))
            $request->session()->put('rows_per_page', $request->rows_per_page);
        elseif (!$request->session()->get('rows_per_page'))
            $request->session()->put('rows_per_page', 10);
        return $request->session()->get('rows_per_page');
    }

    /**
     * Handles sorting parameters from the request.
     * Returns the sorting column and direction.
     *
     * @param Request $request
     * @return array
     */
    protected function sorting(Request $request): array
    {
        $sortColumn = $request->input('sorting.column', 'created_at');
        $sortDirection = $request->input('sorting.direction', 'desc');
        if ($sortDirection == 'ascending') $sortDirection = 'asc';
        if ($sortDirection == 'descending') $sortDirection = 'desc';
        return [$sortColumn, $sortDirection];
    }
}
