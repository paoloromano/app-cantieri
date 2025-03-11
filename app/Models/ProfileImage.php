<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileImage extends Model
{
    use HasFactory;

    protected $fillable = ['profile_id', 'image_name', 'image_path'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
