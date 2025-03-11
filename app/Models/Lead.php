<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'lead_title',
        'lead_name',
        'lead_lastname',
        'lead_role',
        'lead_phone',
        'lead_mobile_phone',
        'lead_email',
        'lead_website',
        'lead_company_name',
        'lead_company_address',
        'lead_company_cap',
        'lead_company_city',
        'lead_company_provence',
        'lead_company_country',
        'lead_company_phone',
        'lead_company_email',
        'lead_company_vat',
    ];

    /**
     * Define the relationship with the Card model.
     */
    public function card()
    {
        return $this->belongsTo(Card::class);
    }

}
