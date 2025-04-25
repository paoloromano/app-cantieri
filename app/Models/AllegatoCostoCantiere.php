<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllegatoCostoCantiere extends Model
{
    use HasFactory;

    // Forziamo il nome della tabella
    protected $table = 'allegati_costi_cantiere';

    protected $fillable = [
        'costo_cantiere_id',
        'nome_file',
    ];

    /**
     * Relazione inversa 1:1 → il file appartiene a un costo
     */
    public function costo()
    {
        return $this->belongsTo(CostoCantiere::class, 'costo_cantiere_id');
    }
}