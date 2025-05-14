<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'brand_name',
        'model',
        'size',
        'description',
        'price',
        'product_image',
        'status'
    ];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
