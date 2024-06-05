@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card" style="margin-top: 150px;  background-color: rgba(255, 255, 255, 0.8)">
                <div class="card-header  " style="  background-color: rgba(63, 225, 23, 0.6);">Payment Successful</div>

                <div class="card-body">
                    <p>Thank you for your purchase!</p>
                    <p>Your order details:</p>
                    <h2>Order Details:</h2>
                    <ul>
                        <li>Order ID: {{ session('order_info.order_id') }}</li>
                        <li>Name: {{ session('order_info.name') }}</li>
                        <li>Email: {{ session('order_info.email') }}</li>
                        <li>Address: {{ session('order_info.address') }}</li>
                        <li>Total Amount: {{ session('order_info.amount')/100 }}</li>
                        <!-- Add more order details as needed -->
                    </ul>
                    <h2>Ordered Items</h2>
                @php
                    $cartItems = session('cart');
                @endphp
                    <ul>
                        @foreach($cartItems as $item)
                            <li>{{ $item['name'] }} - Quantity: {{ $item['quantity'] }} - Price: {{ $item['price']* $item['quantity'] }}</li>
                        @endforeach
                    </ul>
            </div>
        </div>

        </div>
        <h1 style="color: red;"><b>Take a screenshot of your order details</b></h1>
    </div>
</div>
@endsection
