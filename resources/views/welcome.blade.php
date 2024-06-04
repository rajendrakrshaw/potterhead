@include('layouts.app')
@php
$dummyProducts = [
    [
        'name' => 'Product 1',
        'description' => 'Description for Product 1',
        'price' => 19.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    [
        'name' => 'Product 2',
        'description' => 'Description for Product 2',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    [
        'name' => 'Product 2',
        'description' => 'Description for Product 2',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    [
        'name' => 'Product 2',
        'description' => 'Description for Product 2',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    [
        'name' => 'Product 2',
        'description' => 'Description for Product 2',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    [
        'name' => 'Product 2',
        'description' => 'Description for Product 2',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    [
        'name' => 'Product 2',
        'description' => 'Description for Product 2',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    [
        'name' => 'Product 2',
        'description' => 'Description for Product 2',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    [
        'name' => 'Product 2',
        'description' => 'Description for Product 2',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    [
        'name' => 'Product 2',
        'description' => 'Description for Product 2',
        'price' => 29.99,
        'image' => 'https://via.placeholder.com/300'
    ],
    // Add more products here...
];
@endphp

@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach($dummyProducts as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product['name'] }}</h5>
                    <p class="card-text">{{ $product['description'] }}</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted">${{ $product['price'] }}</span>
                        <a href="#" class="btn btn-primary">View Details</a>

                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
