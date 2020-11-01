<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Web\Product;
use App\Models\Web\Category;
use DB;

class Category extends Model
{
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class);
    }
}
