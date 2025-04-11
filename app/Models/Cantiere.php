<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantiere extends Model
{
    use HasFactory;

    protected $table = 'cantieri';

    protected $fillable = [
        'nome',
        'descrizione',
        'data_inizio',
        'data_fine'
    ];

}
