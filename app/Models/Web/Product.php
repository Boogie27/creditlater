<?php

namespace App\Models\Web;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // 
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function product_solds(){
        return $this->hasMany(ProductSold::class, "products_id", "id");
    }

  
}
