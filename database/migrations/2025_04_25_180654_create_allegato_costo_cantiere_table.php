<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllegatoCostoCantiereTable extends Migration
{
    public function up()
    {
        Schema::create('allegati_costi_cantiere', function (Blueprint $table) {
            $table->bigIncrements('id');
            // FK verso costi_cantiere con unique per 1:1
            $table->foreignId('costo_cantiere_id')
                ->constrained('costi_cantiere')
                ->onDelete('cascade')
                ->unique();

            $table->string('nome_file');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('allegati_costi_cantiere');
    }
}