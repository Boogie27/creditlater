<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Web\Brand;
use App\Models\Web\Product;
use App\Models\Web\Category;
use App\Models\Web\priceRange;
use App\Models\Web\ProductSold;
use DB;


class ProductController extends Controller
{
 
    public function index(Request $request)
    {

        //get all category
        $categories = Category::where('is_feature', 1)->get();

        //get all category
        $sideCategories = $categories;
        

        // get all brands
        $allBrands = Brand::all();

        // get price ranges
        $priceRange = priceRange::all();

        // get all products
        $allProducts = Product::where('is_feature', 1)->get();


        // filter products by brand or by price
        if($request->input("brand_id") || $request->input("price_id")){
            $price = priceRange::where('id', $request->price_id)->first();
            if($request->brand_id && !$request->price_id){
                $allProducts = Product::where('brand_id', $request->brand_id)->where('is_feature', 1)->get();
            }else if($request->price_id && !$request->brand_id){
                $allProducts = Product::where('products_price', '>=', $price->price_from)->where('products_price', '<=', $price->price_to)->where('is_feature', 1)->get();
            }else{
                $allProducts = Product::where('products_price', '>=', $price->price_from)->where('products_price', '<=', $price->price_to)->where('brand_id', $request->brand_id)->where('is_feature', 1)->get();
            }
        }



        return view('web.products', compact('categories', 'allProducts', 'allBrands', 'priceRange', 'sideCategories'));
    }
    


    public function show(Request $request){
        //get all category
        $categories = Category::where('is_feature', 1)->get();

        //get all category
        $sideCategories = $categories;
        

        // get all brands
        $allBrands = Brand::all();

        // get price ranges
        $priceRange = priceRange::all();

          // get all products
        $allProducts = Product::where('is_feature', 1)->get();
 

        //    search products using search bar
       if($request->product_search){
            $allProducts = Product::where('products_name', 'LIKE', '%'.$request->product_search.'%')->get();
       }else{
           return back();
       }
       
       return view('web.products', compact('categories', 'allProducts', 'allBrands', 'priceRange', 'sideCategories'));
    }


    public function create($newProducts)
    {

        //get all category
        $categories = Category::where('is_feature', 1)->get();

        //get all category
        $sideCategories = $categories;
        

        // get all brands
        $allBrands = Brand::all();

        // get price ranges
        $priceRange = priceRange::all();

        // get new products from te past one month
        $date = date('Y-m-d H:i:s', strtotime('-30 days'));
        if($newProducts == "new-products"){
            $allProducts = Product::where('products_date_added', '>=', $date)->where('is_feature', 1)->orderBy('products_date_added', 'desc')->get();
        }else if($newProducts == "feature-products"){
            $allProducts = Product::where('is_feature', 1)->get();
        }else if($newProducts == "best-sellers"){
            $allProducts = DB::table('product_solds')->leftJoin('products', 'product_solds.product_id', '=', 'products.id')->orderBy('products_qty_sold', 'desc')->get();
        }else if($newProducts == "slashed"){
            $allProducts = Product::all();
            foreach($allProducts as $products){
                if(($products->products_price / 2) == $products->products_price_slash){
                     $values[] = $products;
                }
            }
            $allProducts = $values;
        }
       
    
        
        return view('web.products', compact('categories', 'allProducts', 'allBrands', 'priceRange', 'sideCategories'));
    }


    // end
}
