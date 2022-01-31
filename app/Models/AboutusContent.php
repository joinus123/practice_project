<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutusContent extends Model
{
    use HasFactory;

    protected $fillable = [

        'aboutus_h1' ,
        'aboutus_h2',
        'aboutus_p1',
        'aboutus_p2',
        'aboutus_content_img',
        'aboutus_slider_img'
    ];
}
