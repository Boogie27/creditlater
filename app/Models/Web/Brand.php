<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Brand extends Model
{
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class);
    }
}
