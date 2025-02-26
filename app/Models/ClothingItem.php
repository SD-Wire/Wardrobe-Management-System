<?php

namespace App\Models;

use App\Enums\ClothingCategory;
use Illuminate\Database\Eloquent\Model;

class ClothingItem extends Model
{
    //
    protected $fillable = ['category', 'name', 'image', 'description'];

    // protected $casts = [
    //     'category' => ClothingCategory::class, // Cast category to Enum
    // ];
    
}