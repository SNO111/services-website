<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;

    protected $fillable = [
        'projects',
        'projects_desc',
        'hours',
        'hours_desc',
        'clients',
        'clients_desc',
        'ui_ux_design',
        'ui_ux_design_desc',
        'web_design',
        'web_design_desc',
        'app_design',
        'app_design_desc',
        'support',
        'support_desc',
        'blog_posts',
    ];
}
