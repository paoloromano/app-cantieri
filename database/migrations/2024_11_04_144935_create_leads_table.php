<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->string('lead_title')->nullable();
            $table->string('lead_name');
            $table->string('lead_lastname');
            $table->string('lead_role')->nullable();
            $table->string('lead_phone')->nullable();
            $table->string('lead_mobile_phone');
            $table->string('lead_email')->unique();
            $table->string('lead_website')->nullable();
            $table->string('lead_company_name');
            $table->string('lead_company_address')->nullable();
            $table->string('lead_company_zipcode')->nullable();
            $table->string('lead_company_city')->nullable();
            $table->string('lead_company_province')->nullable();
            $table->string('lead_company_country')->nullable();
            $table->string('lead_company_phone')->nullable();
            $table->string('lead_company_email')->nullable();
            $table->string('lead_company_vat')->nullable();
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
