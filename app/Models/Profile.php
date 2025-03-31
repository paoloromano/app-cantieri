<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id', 'profile_name', 'profile_lastname', 'profile_role', 'profile_title', 'profile_link_color', 'profile_button_color',
        'profile_theme_color', 'profile_theme_type', 'profile_img_cover_balloon', 'profile_img_cover_hero', 'profile_company_logo',
        'profile_company_name', 'profile_company_first_address', 'profile_company_second_address',
        'profile_zipcode', 'profile_city', 'profile_province', 'profile_country', 'profile_company_phone',
        'profile_company_fax', 'profile_company_email', 'profile_company_pec', 'profile_company_sdi', 'profile_company_vat',
        'profile_company_cf', 'profile_bio', 'profile_phone', 'profile_mobile_phone', 'profile_email', 'profile_website', 'profile_video',
        'active', 'is_company_collapsed', 'is_bio_collapsed', 'is_contacts_collapsed',
        'is_documents_collapsed', 'is_videos_collapsed', 'is_images_collapsed', 'is_links_collapsed'
    ];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

}
