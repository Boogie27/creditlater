<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Web\Category;
use App\Models\Web\Product;
use App\Models\Web\Wishlist;
use App\Models\Web\Auth;


use DB;
use Session;
use Carbon\Carbon;

class WishlistController extends Controller
{
    public function index()
    {
        //  side categories
        $sideCategories = Category::where('is_feature', 1)->get();

        // wish list quantity
        $wishList_quantity = $this->wish_list_quantity();

    
        // get wish list
        $wishlist_items = $this->get_wish_list();
  

        return view('web.wishlist', compact('sideCategories', 'wishlist_items', 'wishList_quantity'));
    }






    // GET WISH LIST
    public function get_wish_list()
    {
        $wishlist_items = 0;
        if($user_id = Auth::user()['id'])
        {
            $wishlist = DB::table('wishlists')->leftJoin('products', 'wishlists.product_id', '=', 'products.id')->where('user_id', $user_id)->get();
            if(count($wishlist) != "")
            {
                $wishlist_items = $wishlist;
            }
        }
        return $wishlist_items;
    }






    public function add_to_wishlist_ajax(Request $request)
    {
        if($request->ajax())
        {   
            $data = false;
            $product = Product::where('id', $request->product_id)->where('is_feature', 1)->first();

            if(Auth::user())
            {
                if($this->registered_user_wish_list($product, $request))
                {
                    $data = true;
                }
            
            }
        }
        return response()->json(['data' => $data]);
    }







    public function registered_user_wish_list($product, $request)
    {
       $user_id = Auth::user()['id'];
       $date =  $date = Carbon::now()->toDateTimeString();

       $quantity = $request->quantity;
       $total = $product->products_price * $quantity;
       $size = $request->size ? $request->size : 'unspecified';

       $old_wishList = WishList::where('user_id', $user_id)->where('product_id', $request->product_id)->first();
       
       $small = 0;
       $medium = 0;
       $large = 0;
       $xlarge = 0;
       $small = 0;
       $unspecified = 0;


       switch($size)
       {
           case "small":
               $small += $quantity;
           break;

           case "medium":
               $medium += $quantity;
           break;

           case "large":
              $large += $quantity;
           break;

           case "xtra large":
               $xlarge += $quantity;
           break;

           case "unspecified":
               $unspecified += $quantity;
           break;
       }


       if($old_wishList == null)
       {
           $wish_list = WishList::create([
               'user_id' => $user_id,
               'product_id' => $request->product_id,
               'price' => $product->products_price,
               'quantity' => $quantity,
               'total' => $total,
               'small' => $small,
               'medium' => $medium,
               'large' => $large,
               'xtra_large' => $xlarge,
               'unspecified' => $unspecified,
               'date_added' => $date,
               'date_modified' => $date
           ]);
           return true;
       }else{

           switch($size)
           {
               case "small":
               $old_wishList->small += $quantity;
               break;
   
               case "medium":
               $old_wishList->medium += $quantity;
               break;
   
               case "large":
               $old_wishList->large += $quantity;
               break;
   
               case "xtra large":
               $old_wishList->xtra_large += $quantity;
               break;
   
               case "unspecified":
                   $old_wishList->unspecified += $quantity;
               break;
           }
    
           

           $old_wishList->quantity += $quantity;
           $old_wishList->total = $old_wishList->price * $old_wishList->quantity;
           $old_wishList->date_modified = $date;
           $old_wishList->save();
           return true;
       }
       return false;
    }








    // DELETE WISH LIST ITEM
    public function delete_wishlist_item_ajax(Request $request)
    {
        if($request->ajax())
        {
            $data = $this->delete_wishlist($request);
        }
        return response()->json(['data' => $data]);
    }





    public function delete_wishlist($request)
    {
        if($user_id = Auth::user()['id'])
        {
            $data = WishList::where('user_id', $user_id)->where('product_id', $request->product_id)->delete();            
        }
        return $data;
    }





    // QUICK ADD TO WISH LIST 
    public function quick_add_to_wishlist_ajax(Request $request)
    {
        if($request->ajax())
        {
           if(Auth::user())
           {
                $product = Product::where('id', $request->product_id)->where('is_feature', 1)->first();
                $data = $this->registered_user_wish_list($product, $request);
           }
        }
        return response()->json(['data' => $data]);
    }






    // GET WISHLIST QUANTITY
    public function get_list_quantity_ajax(Request $request)
    {
       if($request->ajax())
       {
           $quantity = $this->wish_list_quantity();
       }
       return response()->json(['quantity' => $quantity]);
    }





    public function wish_list_quantity()
    {
        $quantity = 0;
        if($user_id = Auth::user()['id'])
        {
            $old_wishList = WishList::where('user_id', $user_id)->get();  
            if(count($old_wishList) != "")
            {
                $data = 0;
                foreach($old_wishList as $values)
                {
                    $quantity += $values->quantity;
                }
            }
        }
        return $quantity;
    }





    public function get_quick_wishlist_items_ajax(Request $request)
    {

       if($request->ajax())
       {
           return view('web.common.get-ajax-wishlist');
       }
    }




    public function quick_delete_wishlist_item_ajax(Request $request)
    {
        if($request->ajax())
        {
            $data = $this->delete_wishlist($request);
        }
        return response()->json(['data' => $data]);
    }



    // end
}
