<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OreDipendente extends Model
{
    protected $table = 'ore_dipendenti';

    protected $fillable = [
        'cantiere_id',
        'dipendente_id',
        'giorno',
        'costo_orario',
        'ore_lavorate',
    ];

    // Relazione al cantiere
    public function cantiere()
    {
        return $this->belongsTo(Cantiere::class);
    }

    // Relazione al dipendente
    public function dipendente()
    {
        return $this->belongsTo(Dipendente::class);
    }
}