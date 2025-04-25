<?php

namespace App\Http\Resources\Dipendente;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;

class DipendenteResource extends JsonResource
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
            "cognome"           => $this->cognome,
            'ore_lavorate' => OreDipendentePerDipendenteResource::collection(
                $this->whenLoaded('oreLavorate')
            ),
        ];
    }
}
