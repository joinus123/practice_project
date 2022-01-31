<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSitePage extends Model
{
    use HasFactory;

    protected $fillable= [

        'header_logo',
        'slider_image',
        'slider_p',
        'slider_h',
        'service_h',
        'donation_h1',
        'donation_h2',
        'footer_logo',
        'footer_logo_h',
        'copyright_text'

    ];
}
