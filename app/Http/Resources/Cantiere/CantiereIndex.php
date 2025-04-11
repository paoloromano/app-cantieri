<?php

namespace App\Http\Resources\Cantiere;

use App\Models\Cantiere;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Cantiere
 */
class CantiereIndex extends JsonResource
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
            "descrizione"       => $this->descrizione,
            "data_inizio"       => $this->data_inizio,
            "data_fine"         => $this->data_fine,
        ];
    }
}
