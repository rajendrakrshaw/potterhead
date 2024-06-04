{{-- // resources/views/products/index.blade.php --}}
@include('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">${{ $product->price }}</p>
                            <button class="btn btn-primary add-to-cart" data-id="{{ $product->id }}">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="1" role="dialog" aria-labelledby="cartModalLabel"
        aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Cart items will be displayed here -->
                    {{-- // Add this section in the modal body in resources/views/products/index.blade.php --}}
                    <div class="cart-items">
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                <div class="cart-item">
                                    <img src="{{ $details['image'] }}" alt="{{ $details['name'] }}">
                                    <p>{{ $details['name'] }}</p>
                                    <p>Quantity: {{ $details['quantity'] }}</p>
                                    <p>${{ $details['price'] }}</p>
                                </div>
                            @endforeach
                        @else
                            <p>Your cart is empty!</p>
                        @endif
                    </div>
                    // Add this form in resources/views/products/index.blade.php inside the modal
                    <form id="checkoutForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <!-- Add more fields as needed -->
                        <button type="submit" class="btn btn-primary">Proceed to PayPal</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Checkout</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('.add-to-cart').on('click', function() {
                var productId = $(this).data('id');
                $.ajax({
                    url: '{{ route('cart.add') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: productId
                    },
                    success: function(response) {
                    // Update cart modal with the new item
                    $('.cart-items').append('<div class="cart-item"><img src="' + response.data.image + '" alt="' + response.data.name + '"><p>' + response.data.name + '</p><p>Quantity: 1</p><p>$' + response.price + '</p></div>');
                    // $('#cartModal').modal('show');
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                }
                });
            });
        });
    </script>
