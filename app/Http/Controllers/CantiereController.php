<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cantiere\CantiereStoreRequest;
use App\Http\Requests\Cantiere\CantiereUpdateRequest;
use App\Http\Resources\Cantiere\CantiereIndex;
use App\Http\Resources\Cantiere\CantiereResource;
use App\Models\Cantiere;
use App\Services\CantiereService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class CantiereController extends Controller
{
    protected CantiereService $cantiereService;

    /**
     * Create a new controller instance.
     * @param CantiereService $cantiereService
     */
    public function __construct(CantiereService $cantiereService)
    {
        $this->cantiereService = $cantiereService;
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $cantieri = $this->cantiereService->index($request);

        return Inertia::render('Cantieri/Index', [
            'cantieri'                 => CantiereIndex::collection($cantieri),
            'baseUrl'              => url('/'),
            'session_rows_per_page' => $request->session()->get('rows_per_page', 10),
        ]);
    }

    public function create()
    {
        return inertia('Cantieri/Create');
    }

    public function store(CantiereStoreRequest $request): RedirectResponse
    {

        $data_inizio = $this->castDateFromDataPicker($request->data_inizio);
        $data_fine = $this->castDateFromDataPicker($request->data_fine);

        Cantiere::create([
            'nome'          => $request->nome,
            'descrizione'   => $request->descrizione,
            'data_inizio'   => $data_inizio,
            'data_fine'     => $data_fine
        ]);

        return redirect()->route('cantieri.index')->with('success', 'Cantiere created.');
    }

    private function castDateFromDataPicker($date_array)
    {
        if ($date_array != null) {

            $yyyy = $date_array['year'];
            $mm = sprintf("%02d", $date_array['month']);
            $dd = $date_array['day'];

            return $yyyy . '-' . $mm . '-' . $dd;

        }else{
            return null;
        }
    }

    public function edit(Cantiere $cantiere)
    {

        return Inertia::render('Cantieri/Edit', [
            'cantiere'    => new CantiereResource($cantiere),
        ]);
    }

    public function update(Cantiere $cantiere, CantiereUpdateRequest $request): RedirectResponse
    {

        $data = array_merge($request->validated(), $cantiere->toArray());

        $cantiere->update($data);

        return Redirect::back()->with('success', 'Cantiere updated.');
    }

    public function destroy(Cantiere $cantiere): RedirectResponse
    {
        $cantiere->delete();

        return Redirect::back()->with('success', 'Cantiere/i deleted.');
    }
}
