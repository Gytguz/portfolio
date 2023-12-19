<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'details',
        'description',
        'product_code',
        'image',
        'price',
        'quantity',
    ];

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Categories::class, 'products_categories');
    }
}
