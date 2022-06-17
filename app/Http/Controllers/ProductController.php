<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilter;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(ProductFilter $request){

        $products = Product::filter($request)->with('images')->paginate(9);

        $categories = Category::all();

        return view('product.index', compact('products', 'categories'));
    }

    public function show(Product $product){
        $sizeSlider = 3;
        $images = $product->images->chunk($sizeSlider);

        $similarProducts = Product::where('category_id' , $product->category_id)->where('id', '!=', $product->id)->get();
        if($similarProducts->count() >= 6 ){
            $similarProducts = $similarProducts->random(6)->chunk(3);
        }else{
            $similarProducts = null;
        }

        return view('product.show', compact('product', 'images' , 'sizeSlider', 'similarProducts'));
    }

}
