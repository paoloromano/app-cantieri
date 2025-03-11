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

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    public function activeProfile()
    {
        return $this->hasOne(Profile::class)->where('active', true);
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function getTranslations()
    {
        return Translation::where('language', $this->lang)->get()->pluck('text', 'label_key');
    }

}
