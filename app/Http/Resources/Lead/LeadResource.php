<?php

namespace App\Http\Resources\Lead;

use App\Http\Resources\Profile\ProfileDocumentResource;
use App\Http\Resources\Profile\ProfileImageResource;
use App\Http\Resources\Profile\ProfileLinkResource;
use App\Http\Resources\Profile\ProfileSocialNetworkResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class LeadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"                  => $this->id,
            "lead_title"          => $this->lead_title,
            "lead_name"           => $this->lead_name,
            "lead_lastname"       => $this->lead_lastname,
            "lead_role"           => $this->lead_role,
            "lead_phone"          => $this->lead_phone,
            "lead_mobile_phone"   => $this->lead_mobile_phone,
            "lead_email"          => $this->lead_email,
            "lead_website"        => $this->lead_website,
            "lead_company_name"   => $this->lead_company_name,
            "lead_company_address"=> $this->lead_company_address,
            "lead_company_zipcode"=> $this->lead_company_zipcode,
            "lead_company_city"   => $this->lead_company_city,
            "lead_company_province"=> $this->lead_company_province,
            "lead_company_country"=> $this->lead_company_country,
            "lead_company_phone"  => $this->lead_company_phone,
            "lead_company_email"  => $this->lead_company_email,
            "lead_company_vat"    => $this->lead_company_vat,
            "created_at"          => $this->created_at,
        ];
    }
}
