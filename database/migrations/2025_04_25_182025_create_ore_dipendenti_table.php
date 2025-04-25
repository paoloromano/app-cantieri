<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOreDipendentiTable extends Migration
{
    public function up()
    {
        Schema::create('ore_dipendenti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cantiere_id')
                ->constrained('cantieri')
                ->onDelete('cascade');
            $table->foreignId('dipendente_id')
                ->constrained('dipendenti')
                ->onDelete('cascade');
            $table->date('giorno');
            $table->decimal('costo_orario', 8, 2);
            $table->decimal('ore_lavorate', 5, 2);
            $table->timestamps();

            // (Opzionale) per velocizzare ricerche/filter:
            $table->index(['cantiere_id', 'dipendente_id', 'giorno']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ore_dipendenti');
    }
}