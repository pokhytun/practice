<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends BaseController
{

    public function index(){

        $products = session('cart');
        // session()->forget('cart');
        // session()->save(); //оновлення сесії

        $totalPrice = $this->service->totalPrice();

        return view('cart', compact('products', 'totalPrice'));

    }

    public function addToCart(Request $request){

        $this->service->addItemInCart($request->id);
        $cartSize = $this->service->cartSize();

        return response()->json(['cartSize' => $cartSize]);
    }

    public function removeFromCart(Request $request){

        $this->service->removeItemFromCart($request->id);
        $cartSize = $this->service->cartSize();
        $totalPrice = $this->service->totalPrice();
        return response()->json(['cartSize' => $cartSize, 'totalPrice' => $totalPrice]);
    }

    public function update(Request $request){

        $cart = session()->get('cart');
        $cart[$request->id]['quantity'] = $request->qty;
        session()->put('cart', $cart);

        $totalPrice = $this->service->totalPrice();

        return response()->json([
            'qty' => $cart[$request->id]["quantity"],
            'price' =>  $cart[$request->id]['price'],
            'totalPrice' => $totalPrice,
        ]);
    }

}
