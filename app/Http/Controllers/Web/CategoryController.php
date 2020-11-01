<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Web\Category;
use App\Models\Web\Product;
use App\Models\Web\Brand;
use App\Models\Web\priceRange;
use DB;


class CategoryController extends Controller
{
   
    public function index(){
        $categories = Category::where('is_feature', 1)->get(); //get all category
        return view("web.category", compact('categories'));
    }

    public function show(Request $request, $category_name)
    {
        // filter products by brand or by price
        $brand_id = null;
        $productFilter = null;

        if($request->input()){
            $category_id = Category::where('category_name', $category_name)->first()->id;
            $price = priceRange::where('id', $request->price_id)->first();
            if($request->brand_id && !$request->price_id){
                $productFilter = DB::table('products')->where('category_id', $category_id)->where('brand_id', $request->brand_id)->where('is_feature', 1)->get();
            }else if($request->price_id && !$request->brand_id){
                $productFilter = DB::table('products')->where('category_id', $category_id)->where('products_price', '>=', $price->price_from)->where('products_price', '<=', $price->price_to)->get();
            }else{
                $productFilter = DB::table('products')->where('category_id', $category_id)->where('brand_id', $request->brand_id)->where('products_price', '>=', $price->price_from)->where('products_price', '<=', $price->price_to)->get();
            }
            $requestURL = $request->input(); //brand_id and price_id url parameter values;

    
        }

       
        //get all category
        $sideCategories = Category::where('is_feature', 1)->get();  
        

        //get categories by catgeory name
        $categories = Category::where('category_name', $category_name)->where('is_feature', 1)->first(); 
        

        // get brands associated with category id;
        $category_id = $categories->id;
        $brand_ids = DB::table('category_brand')->where('category_id', $category_id)->get();   
        $brands = array();
        foreach($brand_ids as $brand_id)
        {
            $brands[] = Brand::where('id', $brand_id->brand_id)->first();
        }
        $categoryBrands = $brands;
        

        // get price ranges
        $priceRange = priceRange::all();
        
        


        return view("web.category", compact('categoryBrands', 'sideCategories', 'categories', 'productFilter', 'priceRange'));
    }


   


}
