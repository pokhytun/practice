<div class="check">
    <div class="load ">
        <img class="load-gif" src="{{asset('images/load-gif.gif')}}" alt="">
    </div>
    <div class="check-container">
        <div class="check-title">E-comerce</div>
        <ul class="check-list">

            @foreach ($order->products as $product)

                <li class="check-list__item">
                    <div>
                        <a href="{{ route('products.show', $product->id)}}">
                            {{ $product->title }} ( x{{ $product->pivot->quantity}} )
                        </a>
                    </div>

                    <div>{{$product->price * $product->pivot->quantity}} $</div>
                </li>

            @endforeach

            <li class="check-list__item check-list__totla-price">
                <div>Total price</div>
                <div> {{ $order->total_price}}$</div>
            </li>

        </ul>
        <div class="qr-code">
            <img class="qr-code__img" src="{{ asset('images/qr-code.gif') }}" alt="">
        </div>
    </div>

</div>
