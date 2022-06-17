@extends('base')

@section('title', 'Cart')

@section('content')
<section id="cart_items">
    <div class="container">
        @if(count($products))
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                        @if($products)
                            @foreach ($products as $product)
                                @include('includes.cart-item')
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <span class="total-price">{{ $totalPrice }}$</span>
            </div>
        @else
        <h2 class="title text-center">Empty</h2>
        @endif
    </div>
</section>
@endsection
