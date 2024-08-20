<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'image_url',
        'views',
        'price',
        'description',
        'is_active',
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'slug' => 'array',
    ];


    public array $translatable = [
        'name',
        'description',
        'slug',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
