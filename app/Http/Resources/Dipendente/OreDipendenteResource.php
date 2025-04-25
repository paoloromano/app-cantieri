<?php

namespace App\Http\Resources\Dipendente;

use Illuminate\Http\Resources\Json\JsonResource;

class OreDipendenteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'dipendente'    => [
                'id'      => $this->dipendente->id,
                'nome'    => $this->dipendente->nome,
                'cognome' => $this->dipendente->cognome,
            ],
            'giorno'        => $this->giorno->toDateString(),
            'costo_orario'  => (float) $this->costo_orario,
            'ore_lavorate'  => (float) $this->ore_lavorate,
        ];
    }
}