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
            $table->renameColumn('profile_link_button', 'profile_button_color');
            $table->renameColumn('profile_img_cover_ballon', 'profile_img_cover_balloon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->renameColumn('profile_button_color', 'profile_link_button');
            $table->renameColumn('profile_img_cover_balloon', 'profile_img_cover_ballon');
        });
    }
};
