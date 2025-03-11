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
            $table->string('profile_name');
            $table->string('profile_lastname');
            $table->string('profile_role');
            $table->string('profile_link_color')->default('#26ACBE');
            $table->string('profile_link_button')->default('#26ACBE');
            $table->string('profile_theme_color')->default('light');
            $table->string('profile_theme_type')->default('ballon');
            $table->string('profile_img_cover_ballon');
            $table->string('profile_img_cover_hero');
            $table->string('profile_company_logo');
            $table->string('profile_company_name')->nullable();
            $table->string('profile_company_first_address')->nullable();
            $table->string('profile_company_second_address')->nullable();
            $table->string('profile_company_phone')->nullable();
            $table->string('profile_company_fax')->nullable();
            $table->string('profile_company_email')->nullable();
            $table->string('profile_company_pec')->nullable();
            $table->string('profile_company_sdi')->nullable();
            $table->string('profile_company_vat')->nullable();
            $table->string('profile_company_cf')->nullable();
            $table->string('profile_bio', 400)->nullable();
            $table->string('profile_phone')->nullable();
            $table->string('profile_mobile_phone')->nullable();
            $table->string('profile_email')->nullable();
            $table->string('profile_website')->nullable();
            $table->string('profile_video')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('profile_name');
            $table->dropColumn('profile_lastname');
            $table->dropColumn('profile_role');
            $table->dropColumn('profile_link_color');
            $table->dropColumn('profile_link_button');
            $table->dropColumn('profile_theme_color');
            $table->dropColumn('profile_theme_type');
            $table->dropColumn('profile_img_cover_ballon');
            $table->dropColumn('profile_img_cover_hero');
            $table->dropColumn('profile_company_logo');
            $table->dropColumn('profile_company_name');
            $table->dropColumn('profile_company_first_address');
            $table->dropColumn('profile_company_second_address');
            $table->dropColumn('profile_company_phone');
            $table->dropColumn('profile_company_fax');
            $table->dropColumn('profile_company_email');
            $table->dropColumn('profile_company_pec');
            $table->dropColumn('profile_company_sdi');
            $table->dropColumn('profile_company_vat');
            $table->dropColumn('profile_company_cf');
            $table->dropColumn('profile_bio');
            $table->dropColumn('profile_phone');
            $table->dropColumn('profile_mobile_phone');
            $table->dropColumn('profile_email');
            $table->dropColumn('profile_website');
            $table->dropColumn('profile_video');
        });
    }
};
