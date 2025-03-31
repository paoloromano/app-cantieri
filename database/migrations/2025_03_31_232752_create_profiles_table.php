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
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('card_id')->index('profiles_card_id_foreign');
            $table->timestamps();
            $table->string('profile_name');
            $table->string('profile_lastname');
            $table->string('profile_role')->nullable();
            $table->text('profile_title')->nullable();
            $table->string('profile_link_color')->default('#26ACBE');
            $table->string('profile_button_color')->default('#26ACBE');
            $table->string('profile_theme_color')->default('light');
            $table->string('profile_theme_type')->default('ballon');
            $table->string('profile_img_cover_balloon')->default('NULL');
            $table->string('profile_img_cover_hero')->default('NULL');
            $table->string('profile_company_logo')->default('NULL');
            $table->string('profile_company_name')->nullable();
            $table->string('profile_company_first_address')->nullable();
            $table->string('profile_company_second_address')->nullable();
            $table->string('profile_zipcode')->nullable();
            $table->string('profile_city')->nullable();
            $table->string('profile_province')->nullable();
            $table->string('profile_country')->nullable();
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
            $table->boolean('active')->default(false);
            $table->boolean('is_company_collapsed')->default(false);
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
        Schema::dropIfExists('profiles');
    }
};
