<?php

namespace App\Http\Resources\Cantiere;
use Illuminate\Http\Resources\Json\JsonResource;

class CantiereResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"                => $this->id,
            "nome"              => $this->nome,
            "descrizione"       => $this->descrizione,
            "data_inizio"       => $this->data_inizio,
            "data_fine"         => $this->data_fine,
        ];
    }
}
