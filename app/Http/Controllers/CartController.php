<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends BaseController
{

    public function index(){
        return view('cart');
    }

}
