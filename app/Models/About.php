<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'story_description',
        'title_1',
        'icon_1',
        'short_text_1',
        'title_2',
        'icon_2',
        'short_text_2',
        'title_3',
        'icon_3',
        'short_text_3',
        'title_4',
        'icon_4',
        'short_text_4',
    ];


    
}
