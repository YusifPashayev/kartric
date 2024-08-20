<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'image_url',
        'description',
        'is_active',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'slug' => 'array',
    ];

    public array $translatable = [
        'title',
        'description',
        'slug',
    ];
}
