<?php

namespace App\Services;

use App\Models\Product;

class CartService {

    public function cartSize(){
        $length = 0;

        if($cart = session('cart')){
            $length = count($cart);
        }

        return $length;
    }

    public function addItemInCart($id){

        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])){

            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [
                "id" => $product->id,
                "title" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => 'path'
            ];
        }

        session()->put('cart', $cart);

    }

    public function removeItemFromCart($id){

        $products = session('cart');

        unset($products[$id]);

        session()->put('cart', $products);
        session()->save();
    }

    public function totalPrice(){

        $price = 0;
        foreach(session('cart') as $item){
            $price += $item['quantity'] * $item['price'];
        }

        return $price;
    }
}
