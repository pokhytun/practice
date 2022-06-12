<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $products = Product::paginate(9);
        return view('product.index', compact('products'));
    }

    public function show(Product $product){
        return view('product.show', compact('product'));
    }
}
