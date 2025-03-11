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
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('activated_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('status')->default(0)->comment('EMPTY');
            $table->string('url_setting')->nullable();
            $table->string('qrcode')->nullable();
            $table->string('redirect')->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->default(0)->index('foreign_key_user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
