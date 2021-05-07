<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_title',
        'logo_image_url',
        'address_1',
        'address_2',
        'city',
        'state',
        'zipcode',
        'phone_number',
    ];


}
