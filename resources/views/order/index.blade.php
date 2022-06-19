@extends('base')

@section('title', 'Order')

@section('content')
    <div class="container">
        <div class="order">
            <ul class="order-list">
                <li class="order-list__item">
                    <div>Data: </div>
                    <div>Quantity: </div>
                    <div>Total Price: </div>
                </li>
            </ul>

            @include('includes.pay-check')
        </div>

    </div>
@endsection
