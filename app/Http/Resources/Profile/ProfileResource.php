<?php

namespace App\Http\Resources\Profile;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $vcardImageString = null;

        if ($this->profile_theme_type == 'balloon'){
            $imagePath = base_path('/storage/app/' . $this->profile_img_cover_balloon);
        }else{
            $imagePath = base_path('/storage/app/' . $this->profile_img_cover_hero);
        }

        if (is_file($imagePath)) {

            if (file_exists($imagePath)) {

                $imageData = file_get_contents($imagePath);

                $base64Image = base64_encode($imageData);

                $vcardImageString = $base64Image;
            }
        } else {
            Log::warning("Il percorso specificato non è un file: $imagePath");
        }

        return [
            'id' => $this->id,
            'card_id' => $this->card_id,
            'profile_name' => $this->profile_name,
            'profile_lastname' => $this->profile_lastname,
            'profile_role' => $this->profile_role,
            'profile_title' => $this->profile_title,
            'profile_link_color' => $this->profile_link_color,
            'profile_button_color' => $this->profile_button_color,
            'profile_theme_color' => $this->profile_theme_color,
            'profile_theme_type' => $this->profile_theme_type,
            'profile_img_cover_balloon' => Storage::url($this->profile_img_cover_balloon),
            'profile_img_cover_hero' => Storage::url($this->profile_img_cover_hero),
            'profile_company_logo' => Storage::url($this->profile_company_logo),
            'profile_company_name' => $this->profile_company_name,
            'profile_company_first_address' => $this->profile_company_first_address,
            'profile_company_second_address' => $this->profile_company_second_address,
            'profile_zipcode' => $this->profile_zipcode,
            'profile_city' => $this->profile_city,
            'profile_province' => $this->profile_province,
            'profile_country' => $this->profile_country,
            'profile_company_phone' => $this->profile_company_phone,
            'profile_company_fax' => $this->profile_company_fax,
            'profile_company_email' => $this->profile_company_email,
            'profile_company_pec' => $this->profile_company_pec,
            'profile_company_sdi' => $this->profile_company_sdi,
            'profile_company_vat' => $this->profile_company_vat,
            'profile_company_cf' => $this->profile_company_cf,
            'profile_bio' => $this->profile_bio,
            'profile_phone' => $this->profile_phone,
            'profile_mobile_phone' => $this->profile_mobile_phone,
            'profile_email' => $this->profile_email,
            'profile_website' => $this->profile_website,
            'profile_video' => $this->profile_video,
            'active' => $this->active,
            'is_company_collapsed' => $this->is_company_collapsed,
            'is_bio_collapsed' => $this->is_bio_collapsed,
            'is_contacts_collapsed' => $this->is_contacts_collapsed,
            'is_documents_collapsed' => $this->is_documents_collapsed,
            'is_videos_collapsed' => $this->is_videos_collapsed,
            'is_images_collapsed' => $this->is_images_collapsed,
            'is_links_collapsed' => $this->is_links_collapsed,
            'social_networks' => ProfileSocialNetworkResource::collection($this->whenLoaded('socialNetworks')),
            'documents' => ProfileDocumentResource::collection($this->whenLoaded('documents')),
            'images' => ProfileImageResource::collection($this->whenLoaded('images')),
            'links' => ProfileLinkResource::collection($this->whenLoaded('links')),
            'image_vcard' => $vcardImageString,
        ];
    }
}
