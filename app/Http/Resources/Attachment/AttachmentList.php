<?php

namespace App\Http\Resources\Attachment;

use App\Helpers\Format;
use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 * @mixin Attachment
 * */
class AttachmentList extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "uuid"       => $this->uuid,
            "created_at" => Format::date($this->created_at),
            "name"       => $this->name,
            "extension"  => $this->extension,
            "size"       => Format::fileSize($this->size),
        ];
    }
}
