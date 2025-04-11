<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('cantieri', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descrizione')->nullable();
            $table->timestamp('data_inizio');
            $table->timestamp('data_fine')->nullable();
            $table->timestamps();
        });

        Schema::create('dipendenti', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cognome');
            $table->string('ruolo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dipendenti');
        Schema::dropIfExists('cantieri');
    }
};
