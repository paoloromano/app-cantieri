<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    public function attachable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }
}
