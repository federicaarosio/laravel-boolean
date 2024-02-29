<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img_url',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
