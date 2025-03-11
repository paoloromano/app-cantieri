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
        Schema::table('profiles', function (Blueprint $table) {
            $table->integer('is_company_collapsed')->default(1);
            $table->integer('is_bio_collapsed')->default(0);
            $table->integer('is_contacts_collapsed')->default(0);
            $table->integer('is_documents_collapsed')->default(0);
            $table->integer('is_videos_collapsed')->default(0);
            $table->integer('is_images_collapsed')->default(0);
            $table->integer('is_links_collapsed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn([
                'is_company_collapsed',
                'is_bio_collapsed',
                'is_contacts_collapsed',
                'is_documents_collapsed',
                'is_videos_collapsed',
                'is_images_collapsed',
                'is_links_collapsed'
            ]);
        });
    }
};
