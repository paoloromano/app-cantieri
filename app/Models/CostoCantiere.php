<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostoCantiere extends Model
{
    use HasFactory;

    protected $table = 'costi_cantiere';

    protected $fillable = [
        'cantiere_id',
        'voce_di_costo',
        'data_fattura',
        'numero_fattura',
        'nome_fornitore',
        'costo',
        'data_pagamento',
    ];

    protected $casts = [
        'data_fattura'   => 'date',
        'data_pagamento' => 'date',
        'costo'          => 'decimal:2',
    ];

    /**
     * Relazione inverse 1:N: ogni costo appartiene a un cantiere
     */
    public function cantiere()
    {
        return $this->belongsTo(Cantiere::class);
    }

    /**
     * Relazione 1:1 → un costo ha un solo allegato
     */
    public function allegatoCosto()
    {
        return $this->hasOne(AllegatoCostoCantiere::class, 'costo_cantiere_id');
    }
}
