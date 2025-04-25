<?php

namespace App\Http\Resources\Cantiere;

use Illuminate\Http\Resources\Json\JsonResource;

class CostoCantiereResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'               => $this->id,
            'voce_di_costo'    => $this->voce_di_costo,
            'data_fattura'     => $this->data_fattura->toDateString(),
            'numero_fattura'   => $this->numero_fattura,
            'nome_fornitore'   => $this->nome_fornitore,
            'costo'            => $this->costo,
            'data_pagamento'   => optional($this->data_pagamento)->toDateString(),
            'allegato'         => new AllegatoCostoCantiereResource(
                $this->whenLoaded('allegatoCosto')
            ),
        ];
    }
}