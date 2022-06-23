<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                @if($product->images->count())
                    <img class="cart-photo" src="{{asset($product->images->random()->path)}}" alt="">
                @else
                    <img class="cart-photo" src="{{asset('images/products/default.jpg')}}" alt="">
                @endif

                <h2>{{$price = $product->price }}$</h2>
                <p>{{$title = $product->title }}</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>{{ $price }}$</h2>
                    <div>
                        <a href="{{ route('products.show' , $product->id) }}"> {{ $title }}</a>
                    </div>

                    <a href="#"  data-id="{{ $product->id }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
