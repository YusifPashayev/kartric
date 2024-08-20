<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CustomerReview extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'description',
        'customer',
        'image_url',
        'company',
        'is_active',
    ];

    protected $casts = [
        'description' => 'array',
        'customer' => 'array',
        'company' => 'array',
    ];

    public array $translatable = [
        'description',
        'customer',
        'company',
    ];
}
