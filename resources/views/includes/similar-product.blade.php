<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                @if($product->images->count())
                    <img class="main-photo" src="{{asset($product->images->random()->path)}}" alt="">
                @else
                    <img class="main-photo" src="{{asset('images/products/default.jpg')}}" alt="">
                @endif
                <h2>{{ $product->price }}</h2>
                <div>
                    <a href="{{ route('products.show', $product->id) }}">
                        {{  $product->title }}
                    </a>
                </div>
                <a href="{{ route('cart.add' , $product->id) }}" data-id="{{$product->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
        </div>
    </div>
</div>
