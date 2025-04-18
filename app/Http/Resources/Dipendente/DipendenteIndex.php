<?php

namespace App\Http\Resources\Dipendente;

use App\Models\Dipendente;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Dipendente
 */
class DipendenteIndex extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"                => $this->id,
            "nome"              => $this->nome,
            "cognome"           => $this->cognome,
        ];
    }
}
