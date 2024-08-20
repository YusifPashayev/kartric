<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'question',
        'answer',
        'is_active',
    ];


    protected $casts = [
        'question' => 'array',
        'answer' => 'array',
    ];

    public array $translatable = [
        'question',
        'answer',
    ];
}
