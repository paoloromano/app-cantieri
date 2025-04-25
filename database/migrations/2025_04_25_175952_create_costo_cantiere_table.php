<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostoCantiereTable extends Migration
{
    public function up()
    {
        Schema::create('costi_cantiere', function (Blueprint $table) {
            $table->bigIncrements('id');
            // chiave esterna verso la tabella 'cantieri'
            $table->foreignId('cantiere_id')
                ->constrained('cantieri')
                ->onDelete('cascade');

            $table->string('voce_di_costo');
            $table->date('data_fattura')->nullable();
            $table->string('numero_fattura')->nullable();
            $table->string('nome_fornitore')->nullable();
            $table->decimal('costo', 12, 2);
            $table->date('data_pagamento')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('costi_cantiere');
    }
}