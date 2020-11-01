<?php
use App\Models\Web\Rating;
use App\Models\Web\Cart;

    function star_rating($id)
    {
        $values = null;
        $ratings = Rating::where('product_id', $id)->first();
        
        if($ratings)
         {
            $values = ceil($ratings["rating_total"] / $ratings["rating_count"]);
         }
       
        return $values;
    }


    function first_letter($string){
        if($string)
        {
            $leter = '';
            foreach(explode(' ', $string) as $value){
                $leter .= strtoupper(substr($value, 0,1));
            }
            return $leter;
        }
        return false;
    }


    function get_cart_quantity($user_id){
        // get user total quantity
        $cart_quantity = 0;
        if($user_id)
        {
            if($save_cart = Cart::where('user_id', $user_id)->get())
            {
                $cart_quantity = 0;
                foreach($save_cart as $cart)
                {
                    $cart_quantity +=   $cart->quantity;
                }
            }
        }
         
          return $cart_quantity;
    }

 
    function image($string, $index = null){
        if($string){
           $data = explode(',', $string);
           return $data[$index];
        }
        return "Error: include image array";
   }

    function cart($user_id){
        //  get user cart
        $user_cart = DB::table('carts')->where('user_id', $user_id)->leftJoin('products', 'carts.product_id', '=', 'products.id')->get();
        $cart = 0;
        if(count($user_cart)){
            $cart = $user_cart;
        }
    return $cart;
 }