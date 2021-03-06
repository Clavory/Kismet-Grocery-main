@extends('layouts.app')
@section('Title', 'Profile')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="row">
            <h1>User Profile</h1>
            <hr>
            <h2>My Orders</h2>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">${{ $item['price'] }}</span>
                                    {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>
</div>
</div>
<style>
    body {
        background:white;
    }
</style>
@endsection