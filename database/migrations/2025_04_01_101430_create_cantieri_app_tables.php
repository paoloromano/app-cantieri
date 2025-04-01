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
            $table->date('data_inizio');
            $table->date('data_fine')->nullable();
            $table->decimal('budget', 10, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('dipendenti', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cognome');
            $table->string('codice_fiscale')->unique();
            $table->string('ruolo');
            $table->timestamps();
        });

        Schema::create('ore_lavorate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dipendente_id')->constrained('dipendenti')->onDelete('cascade');
            $table->foreignId('cantiere_id')->constrained('cantieri')->onDelete('cascade');
            $table->date('data');
            $table->decimal('ore', 5, 2);
            $table->timestamps();
        });

        Schema::create('preventivi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cantiere_id')->constrained('cantieri')->onDelete('cascade');
            $table->date('data_creazione');
            $table->timestamps();
        });

        Schema::create('preventivo_voci', function (Blueprint $table) {
            $table->id();
            $table->foreignId('preventivo_id')->constrained('preventivi')->onDelete('cascade');
            $table->string('nome');
            $table->text('descrizione')->nullable();
            $table->decimal('quantita', 10, 2);
            $table->decimal('costo_totale', 10, 2);
            $table->timestamps();
        });

        Schema::create('consuntivi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cantiere_id')->constrained('cantieri')->onDelete('cascade');
            $table->date('data_creazione');
            $table->timestamps();
        });

        Schema::create('consuntivo_voci', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consuntivo_id')->constrained('consuntivi')->onDelete('cascade');
            $table->string('nome');
            $table->text('descrizione')->nullable();
            $table->decimal('quantita', 10, 2);
            $table->decimal('costo_totale', 10, 2);
            $table->timestamps();
        });

        Schema::create('costi_cantiere', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cantiere_id')->constrained('cantieri')->onDelete('cascade');
            $table->decimal('totale_materiali', 10, 2);
            $table->decimal('totale_operai', 10, 2);
            $table->decimal('totale_fatture', 10, 2);
            $table->timestamps();
        });

        Schema::create('fatture_fornitori', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cantiere_id')->constrained('cantieri')->onDelete('cascade');
            $table->string('fornitore');
            $table->string('numero_fattura')->unique();
            $table->date('data_fattura');
            $table->decimal('importo', 10, 2);
            $table->string('documento')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fatture_fornitori');
        Schema::dropIfExists('costi_cantiere');
        Schema::dropIfExists('consuntivo_voci');
        Schema::dropIfExists('consuntivi');
        Schema::dropIfExists('preventivo_voci');
        Schema::dropIfExists('preventivi');
        Schema::dropIfExists('ore_lavorate');
        Schema::dropIfExists('dipendenti');
        Schema::dropIfExists('cantieri');
    }
};
