<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends BaseController
{

    public function index(){

        $orders = Order::withSum('products', 'product_order.quantity')->get();

        return view('order.index', compact('orders'));

    }

    public function check(Request $request){

        $view = view('includes.pay-check', ['order' => Order::find($request->id)])->render();

        return response()->json(['html'=> $view]);
    }

    public function store(){

        $order = Order::create([
            'user_id' => Auth()->user()->id,
            'total_price' => $this->service->totalPrice(),
        ]);

        foreach(session('cart') as $item){
           DB::insert('insert into product_order (order_id, product_id, quantity) values (?,?,?)', [$order->id, $item['id'], $item['quantity']]);
        }

        session()->forget('cart');
        session()->save(); //оновлення сесії

        return redirect(route('order.index'));
    }

}
