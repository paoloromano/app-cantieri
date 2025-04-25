<?php

namespace App\Http\Resources\Dipendente;
use Illuminate\Http\Resources\Json\JsonResource;

class OreDipendentePerDipendenteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'           => $this->id,
            'cantiere'     => [
                'id'   => $this->cantiere->id,
                'nome' => $this->cantiere->nome,
                'descrizione' => $this->cantiere->descrizione,
                'data_inzio'  => $this->cantiere->data_inzio,
                'data_fine'   => $this->cantiere->data_fine,
            ],
            'giorno'       => $this->giorno->toDateString(),
            'costo_orario' => (float) $this->costo_orario,
            'ore_lavorate' => (float) $this->ore_lavorate,
        ];
    }
}