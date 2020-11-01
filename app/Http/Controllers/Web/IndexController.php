<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Web\Product;
use App\Models\Web\Slider;
use App\Models\Web\Brand;
use App\Models\Web\Cart;
use App\Models\Web\Rating;
use App\Models\Web\Category;
use App\Models\Web\ProductSold;
use DB;



class IndexController extends Controller
{

    public $_percentage = array();



    public function index(Request $request){
        $sideCategories = Category::where('is_feature', 1)->get(); //get all category

        $sliders = Slider::where('is_feature', 1)->get(); //get all slider
        
        $tab_categories = Category::where('is_feature', 1)->limit(6)->get(); //get six tab category
        
        $specialProducts = DB::table('products')->where('is_feature', 1)->where('is_special', 1)->inRandomOrder()->limit(6)->get();   // special products
        
        $brands = Brand::where('is_feature', 1)->limit(6)->get(); //get all slider
        
        $featuredProducts = Product::where('is_feature', 1)->inRandomOrder()->limit(2)->get();  //get two featurd products

        // best sellers
        $bestSellers = DB::table('products')->leftJoin('product_solds', 'products.id', '=', 'product_solds.product_id')->orderBy('total_price', 'desc')->limit(2)->get();
       
        //new products
        $newProducts = Product::where('is_feature', 1)->orderBy('products_date_added', 'desc')->limit(2)->get();
       
        //on sale
        $onSales = Product::where('is_feature', 1)->inRandomOrder()->limit(2)->get(); 

        //on sale
        $yesterdayDate = date("Y-m-d H:s:i");
        $todaysDeal = Product::where('is_feature', 1)->where('products_date_added', '>=', $yesterdayDate)->inRandomOrder()->limit(2)->get(); 
        
        // 50% off products
        $fiftyPercentOff = Product::where('is_feature', 1)->inRandomOrder()->get();
        $productsArray = array();
        foreach($fiftyPercentOff as $product)
        {
            if(($product->products_price / 2) == $product->products_price_slash){
                if(count($productsArray) == 2)break;
                $productsArray[] = $product;
            }
        }
        $fiftyPercentOff = $productsArray;


    
       

        

        return view("web.index", compact(
                                'sideCategories', 'sliders', 'tab_categories', 'specialProducts', 
                                'brands', 'featuredProducts', 'bestSellers', 'newProducts', 'onSales',
                                'todaysDeal', 'fiftyPercentOff'));
    }





  

    
    
  

    // end
}


