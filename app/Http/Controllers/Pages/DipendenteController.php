<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dipendente\DipendenteStoreRequest;
use App\Http\Requests\Dipendente\DipendenteUpdateRequest;
use App\Http\Resources\Dipendente\DipendenteIndex;
use App\Http\Resources\Dipendente\DipendenteResource;
use App\Models\Dipendente;
use App\Services\DipendenteService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class DipendenteController extends Controller
{
    protected DipendenteService $dipendenteService;

    /**
     * Create a new controller instance.
     * @param DipendenteService $dipendenteService
     */
    public function __construct(DipendenteService $dipendenteService)
    {
        $this->dipendenteService = $dipendenteService;
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        Log::info($request);

        $dipendenti = $this->dipendenteService->index($request);

        return Inertia::render('Dipendenti/Index', [
            'dipendenti'                 => DipendenteIndex::collection($dipendenti),
            'baseUrl'                    => url('/'),
            'session_rows_per_page'      => $request->session()->get('rows_per_page', 10),
        ]);
    }

    public function create()
    {
        return inertia('Dipendenti/Create');
    }

    public function store(DipendenteStoreRequest $request): RedirectResponse
    {

        Dipendente::create([
            'nome'          => $request->nome,
            'cognome'       => $request->cognome,
        ]);

        return redirect()->route('dipendenti.index')->with('success', 'Dipendente created.');
    }

    public function show($id)
    {
        $dipendente = Dipendente::with('oreLavorate.cantiere')
            ->findOrFail($id);

        return Inertia::render('Dipendenti/Show', [
            'dipendente'    => new DipendenteResource($dipendente),
        ]);
    }

    public function edit($id)
    {
        $dipendente = Dipendente::findOrFail($id);

        return Inertia::render('Dipendenti/Edit', [
            'dipendente'    => new DipendenteResource($dipendente),
        ]);
    }

    public function update(Dipendente $dipendente, DipendenteUpdateRequest $request): RedirectResponse
    {

        $data = $request->validated();

        $dipendente->update($data);

        return Redirect::back()->with('success', 'Dipendente updated.');
    }

    public function destroy(Request $request): RedirectResponse
    {

        $dipendentiIds = $request->input('dipendenti_ids', []);

        $all = false;

        if ($dipendentiIds[0] == 'a' && $dipendentiIds[1] == 'l' && $dipendentiIds[2] == 'l'){
            $dipendentiIds = Dipendente::query()->get();
            $all = true;
        }

        foreach ($dipendentiIds as $id) {

            $dipendente = Dipendente::find($id);

            if ($all){
                $dipendente = Dipendente::find($id->id);
            }

            $dipendente->delete();
        }

        return Redirect::back()->with('success', 'Dipendente/i deleted.');
    }
    
}
