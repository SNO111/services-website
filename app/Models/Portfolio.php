<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_description',
        'project_link',
        'project_display_img',
        'project_img_1',
        'project_img_2',
        'project_img_3',
        'clients_name',
        'client_country',
    ];
}
