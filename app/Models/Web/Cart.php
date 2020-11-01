<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $guarded = [];



    public $_items = null;
    public $_totalPrice = 0;
    public $_totalQty = 0;


    public function __construct($oldCart = null)
    {
        if($oldCart)
        {
            $this->_items = $oldCart->_items;
            $this->_totalPrice = $oldCart->_totalPrice;
            $this->_totalQty = $oldCart->_totalQty;
        }
    }


    public function add($id, $product, $size, $quantity)
    {
        $size = $size ? trim($size) : 'unspecified';
        $stored_item = ['product_id' => $id, 'product' => $product, 'price' => 0, 'quantity' => 0, 'small' => 0, 'medium' => 0, 'large' => 0, 'xtra large' => 0, 'unspecified' => 0];
        if($this->_items)
        {
            if(array_key_exists($id, $this->_items))
            {
                $stored_item = $this->_items[$id];
            }
        }

        switch($size)
        {
            case 'small':
                $stored_item['small'] += $quantity;
            break;

            case 'medium':
                $stored_item['medium'] += $quantity;
            break;

            case 'large':
                $stored_item['large'] += $quantity;
            break;

            case 'xtra large':
                $stored_item['xtra large'] += $quantity;
            break;

            case 'unspecified':
                $stored_item['unspecified'] += $quantity;
            break;
        }

        
        $stored_item['quantity'] += $quantity;
        $stored_item['price'] += $product->products_price * $quantity;
        $this->_items[$id] = $stored_item;
        $this->_totalPrice += $product->products_price * $quantity;
        $this->_totalQty += $quantity;
    }

   




    public function delete_cart($id)
    {
        $stored_item = ['product_id' => '', 'product' => '', 'price' => 0, 'quantity' => 0, 'small' => 0, 'medium' => 0, 'large' => 0, 'xtra large' => 0, 'unspecified' => 0];        
        if($this->_items)
        {
            if(array_key_exists($id, $this->_items))
            {
                $stored_item = $this->_items[$id];
                unset($this->_items[$id]);
            }
        }

        $this->_totalPrice -= $stored_item['price'];
        $this->_totalQty -= $stored_item['quantity'];
    }

    // end
}
