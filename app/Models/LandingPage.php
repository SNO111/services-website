<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'our_services',
        'our_services_btn',
        'our_services_img',
        'about_us',
        'about_us_btn',
        'about_us_img',
        'achievements_name_1',
        'achievements_num_1',
        'achievements_name_2',
        'achievements_num_2',
        'achievements_name_3',
        'achievements_num_3',
        'achievements_num_4',
        'newsletter_desc',

    ];
}
