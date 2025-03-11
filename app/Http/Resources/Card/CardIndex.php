<?php

namespace App\Http\Resources\Card;

use App\Helpers\Format;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Card;
use App\Models\Lead;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

/**
 * @mixin Card
 */
class CardIndex extends JsonResource
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
            "slug"              => $this->slug,
            "email"             => $this->user->email,
            "created_at"        => $this->created_at,
            "activated_at"      => $this->activated_at,
            "status"            => $this->status,
            "user_id"           => $this->user_id,
            "name"              => $this->user->name,
            "qrcode"            => Storage::url($this->qrcode),
            "views"             => $this->views,
            "profiles"           => ProfileResource::collection($this->profiles),
            "leads"             => Lead::all(),
            "lang"              => $this->current_lang,
            "translations"      => Translation::where('language', $this->current_lang)
                                                ->pluck('text', 'label_key')
                                                ->toArray()
        ];
    }
}
