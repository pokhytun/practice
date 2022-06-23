<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                @if($item->images->count())
                    <img class="main-photo" src="{{asset($item->images->random()->path)}}" alt="">
                @else
                    <img class="main-photo" src="{{asset('images/products/default.jpg')}}" alt="">
                @endif
                <h2>{{ $item->price }}</h2>
                <div>
                    <a href="{{ route('products.show', $item->id) }}">
                        {{  $item->title }}
                    </a>
                </div>
                <a href="{{ route('cart.add' , $item->id) }}" data-id="{{$item->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
        </div>
    </div>
</div>
