@extends('base')

@section('title', 'Order')

@section('content')
    <div class="container">
        @if($orders->count())
            <div class="order">
                <ul class="order-list">

                    @foreach ($orders as $order)
                        <li class="order-list__item" data-id="{{ $order->id }}">
                            <div>Data: {{ $order->created_at->format('d.m.Y'); }}</div>
                            <div>{{ $order->products_sum_product_orderquantity }} products</div>
                       </li>
                    @endforeach

                </ul>
                    @include('includes.pay-check', ['order' => $orders->first()])
                </div>
        @else
            <h2 class="title text-center">Empty</h2>
        @endif

    </div>
@endsection
