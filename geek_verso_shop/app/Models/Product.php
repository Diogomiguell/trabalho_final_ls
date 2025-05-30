<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'product_description', 'product_quantity', 'product_price', 'product_rating', 'product_file_name', 'user_id'
    ];
}
