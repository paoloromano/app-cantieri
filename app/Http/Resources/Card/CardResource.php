<?php

namespace App\Http\Resources\Card;

use App\Http\Resources\Lead\LeadResource;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Lead;
use App\Models\Translation;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CardResource extends JsonResource
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
            "slug"              => $this->slug,
            "email"             => $this->user->email,
            "created_at"        => $this->created_at,
            "activated_at"      => $this->activated_at,
            "status"            => $this->status,
            "user_id"           => $this->user_id,
            "name"              => $this->user->name,
            "qrcode"            => Storage::url($this->qrcode),
            "views"             => $this->views,
            "profiles"          => ProfileResource::collection($this->profiles),
            "leads"            => LeadResource::collection($this->leads),
            "lang"             => $this->current_lang,
            "translations"     => Translation::where('language', $this->current_lang)->pluck('text', 'label_key')->toArray(),
            "all_langs"        => Translation::distinct()->pluck('language')->toArray()
        ];
    }
}
