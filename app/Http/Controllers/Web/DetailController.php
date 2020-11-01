<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Web\Product;
use App\Models\Web\Category;

use DB;
use Session;

class DetailController extends Controller
{
    public function index(){
        $categories = Category::where('is_feature', 1)->get(); //get all category

        return view("web.detail", compact('categories'));
    }

    public function show($product_id)
    {
        $sideCategories = Category::where('is_feature', 1)->get(); //get all category

        $product = Product::where('id', $product_id)->first();

        $category_id = $product->category_id;

        $paymentMethods = DB::table('payment_methods')->where('active', '=', 1)->get();

        $relatedProducts = DB::table('products')->where('category_id', $category_id)->where('is_feature', 1)->inRandomOrder()->limit(6)->get();   // special products                

        
        return view('web.detail', compact('product', 'sideCategories', 'relatedProducts', 'paymentMethods'));
    }




    

    // end
}


