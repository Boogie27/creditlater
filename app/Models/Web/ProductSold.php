<?php

namespace App\Models\Web;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSold extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
