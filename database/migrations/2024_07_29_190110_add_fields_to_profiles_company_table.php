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
            $table->string('profile_zipcode')->after('profile_company_second_address')->nullable();
            $table->string('profile_city')->after('profile_zipcode')->nullable();
            $table->string('profile_province')->after('profile_city')->nullable();
            $table->string('profile_country')->after('profile_province')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('profile_zipcode');
            $table->dropColumn('profile_city');
            $table->dropColumn('profile_province');
            $table->dropColumn('profile_country');
        });
    }
};
