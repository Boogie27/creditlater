<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Web\Category;
use App\Models\Web\Product;
use App\Models\Web\Cart;


use Session;

class AjaxController extends Controller
{
    public function quick_view_ajax(Request $request){
             
        if($request->ajax()){
           $product = Product::where('id', $request->product_id)->first();
           $image =  explode(',', $product->products_image)[0];
           $ajaxLoader = "web/images/ajax-loader.gif";
           $real_image = "web/images/quick-view.jpg";

           $response =    '<div class="col-lg-6 col-xs-12">
                               <div class="quick-view-img">
                                   <img src='.asset($image).' alt="" class="img-fluid quick-view-white-image">
                               </div>
                           </div>
                           <div class="col-lg-6 rtl-text">
                               <div class="product-right">
                                   <h2 class="quick-view-name" style="text-transform: uppercase;">'.$product->products_name.'</h2>
                                   <h3 class="quick-view-price">&#x20A6;'.number_format($product->products_price).'</h3>
                                   <div class="border-product">
                                       <h6 class="product-title">product details</h6>
                                       <p class="quick-view-detail">'.$product->products_detail.'</p>
                                   </div>
                                   <div class="product-description border-product">
                                       <div class="size-box">
                                           <ul>
                                               <li class="active"><a href="#">s</a></li>
                                               <li><a href="#">m</a></li>
                                               <li><a href="#">l</a></li>
                                               <li><a href="#">xl</a></li>
                                           </ul>
                                       </div>
                                       <h6 class="product-title">quantity</h6>
                                       <div class="qty-box">
                                           <div class="input-group"><span class="input-group-prepend"><button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="fa fa-angle-left"></i></button> </span>
                                           <input type="text" name="quantity" class="form-control input-number" value="1"> <span class="input-group-prepend"><button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="fa fa-angle-right"></i></button></span></div>
                                       </div>
                                   </div>
                                   <div class="product-buttons"><a href="#" class="btn btn-normal">add to cart</a> <a href='.url('/detail/'.$product->id).' class="btn btn-normal quick-view-id">view detail</a></div>
                               </div>
                           </div>';
        }
        return response()->json(['data' => $response]);
    }



    public function add_to_cart_ajax(Request $request)
    {
        if($request->ajax())
        {
            $product_id = $request->product_id;
            $size = $request->product_size;
            $quantity = $request->product_qty;

            $product = Product::where('id', $product_id)->first();
            $date = date("Y-m-d H:i:s");
            $total = $product->products_price * $quantity;
            $user_id = 1;   //user id to be substitude with user auth id

            $old_cart = Cart::where('user_id', $user_id)->where('product_id', $product_id)->where('size', $size)->first();
            if($old_cart)
            {
                $quantity = $old_cart->quantity + $quantity;
                $total = $old_cart->price * $quantity;
                $data = Cart::where('user_id', $user_id)->where('product_id', $product_id)->where('size', $size)->update([
                    'quantity' => $quantity,
                    'total' => $total,
                    'date_modified' => $date
                ]);
            }else{
                $data = Cart::create([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'size' => $size,
                    'price' => $product->products_price,
                    'quantity' => $quantity,
                    'total' => $total,
                    'date_added' => $date,
                    'date_modified' => $date
                ]);
            
                $data->save();
            }

            // get user total quantity
            if($save_cart = Cart::where('user_id', $user_id)->get())
            {
                $cart_quantity = 0;
                foreach($save_cart as $cart)
                {
                    $cart_quantity +=   $cart->quantity;
                }
            }
            
        }
        return response()->json(['cart_quantity' => $cart_quantity]);
    }









    // end
}
