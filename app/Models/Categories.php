<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug', 
        'product_code'
    ];

    public function products():BelongsToMany {
        return $this->belongsToMany(Products::class, 'products_categories');
    }
}
