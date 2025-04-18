<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
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

        Cantiere::create([
            'nome'          => $request->nome,
            'descrizione'   => $request->descrizione,
            'data_inizio'   => $request->data_inizio,
            'data_fine'     => $request->data_fine
        ]);

        return redirect()->route('cantieri.index')->with('success', 'Cantiere created.');
    }

    public function edit($id)
    {
        $cantiere = Cantiere::findOrFail($id);

        return Inertia::render('Cantieri/Edit', [
            'cantiere'    => new CantiereResource($cantiere),
        ]);
    }

    public function update(Cantiere $cantiere, CantiereUpdateRequest $request): RedirectResponse
    {

        $data = $request->validated();

        $cantiere->update($data);

        return Redirect::back()->with('success', 'Cantiere updated.');
    }

    public function destroy(Request $request): RedirectResponse
    {

        $cantieriIds = $request->input('cantieri_ids', []);

        $all = false;

        if ($cantieriIds[0] == 'a' && $cantieriIds[1] == 'l' && $cantieriIds[2] == 'l'){
            $cantieriIds = Cantiere::query()->get();
            $all = true;
        }

        foreach ($cantieriIds as $id) {

            $cantiere = Cantiere::find($id);

            if ($all){
                $cantiere = Cantiere::find($id->id);
            }

            $cantiere->delete();
        }

        return Redirect::back()->with('success', 'Cantiere/i deleted.');
    }
}
