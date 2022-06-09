<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="{{asset('images/products/default.jpg')}}" alt="">
                <h2>{{$price = $product->price }}$</h2>
                <p>{{$title = $product->title }}</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>{{ $price }}$</h2>
                    <div>
                        <a href="#"> {{ $title }}</a>
                    </div>

                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
