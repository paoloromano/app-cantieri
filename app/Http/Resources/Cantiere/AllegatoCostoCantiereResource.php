<?php

namespace App\Http\Resources\Cantiere;

use Illuminate\Http\Resources\Json\JsonResource;

class AllegatoCostoCantiereResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                  => $this->id,
            'costo_cantiere_id'   => $this->costo_cantiere_id,
            'nome_file'           => $this->nome_file
        ];
    }
}