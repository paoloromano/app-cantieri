<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'slug',
        'url_setting',
        'activated_at',
        'status',
        'user_id',
        'qrcode',
        'views',
        'redirect',
        'redirect_status',
        'current_lang'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
