<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'url_headline_image',
        'url_links',
        'url_images',
        'is_active',
    ];

    protected $casts = [
        'url_links' => 'array',
        'url_images' => 'array',
    ];
}
