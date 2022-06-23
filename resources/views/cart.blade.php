@extends('base')

@section('title', 'Cart')

@section('content')
<section id="cart_items">
    <div class="container cart-container">
        @if($products)
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
                        @foreach ($products as $product)
                            @include('includes.cart-item')
                        @endforeach
                    </tbody>
                </table>

            </div>
            <span class="total-price">Total price: {{ $totalPrice }}$</span>
            <form action="{{ route('order.store') }}" method="post">
                @csrf
                <input type="submit" value="Order" class="btn btn-default">
            </form>
        @else
        <h2 class="title text-center">Empty</h2>
        @endif

    </div>
</section>
@endsection
