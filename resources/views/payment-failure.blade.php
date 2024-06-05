@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8" >
            <div class="card" style="margin-top: 150px;  background-color: rgba(255, 255, 255, 0.8)">
                <div class="card-header">Payment Failed</div>

                <div class="card-body">
                    <p>Please go back to the product page!</p>
                    {{-- <p>Your order details:</p> --}}
                    <ul>
                        {{-- <li>Order ID: {{ $order->id }}</li>
                        <li>Name: {{ $order->name }}</li>
                        <li>Email: {{ $order->email }}</li>
                        <li>Amount: {{ $order->amount }}</li> --}}
                        <!-- Add more order details as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
