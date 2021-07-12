<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart
{
    //
    public $items = [];
    public $totalQty;
    public $totalPrice;

    public function __Construct($card = null)
    {
        if($cart){
            $this->items = $card->items;
            $this->totalQty = $card->totalQty;
            $this->totalPrice = $card->totalPrice;
        }else{
            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
        }
    }

    

    public function add($product){
        $item = [
            'img' => $product->img,
            'name_product' => $product->name_product,
            'price' => $product->price,
            'qty' => 0
        ];
        if(!array_key_exists($product->id , $this->items)){
            $this->items[$product->id] = $item;
            $this->totalQty +=1;
            $this->totalPrice += $product->price;
        }else{
            $this->totalQty +=1;
            $this->totalPrice += $product->price;
        }

        $this->items[$product->id]['qty'] += 1;
    }
}