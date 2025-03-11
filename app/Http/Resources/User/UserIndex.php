<?php

namespace App\Http\Resources\User;

use App\Helpers\Format;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin User
 */
class UserIndex extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            "id"         => $this->id,
            "created_at" => Format::date($this->created_at),
            "name"       => $this->name,
            "email"      => $this->email,
            "type"       => $this->type,
            "role"       => ($this->role_id == 3)? "card" : "super-admin" ,
        ];
    }
}
