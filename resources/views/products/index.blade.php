{{-- // resources/views/products/index.blade.php --}}
@include('layouts.app')


@section('content')
    <style>
        .product-card {
            background-color: rgba(255, 255, 255, 0.6);
            margin-bottom: 20px;
            /* Add margin between cards */
            border-radius: 10px;
            /* Add rounded corners to cards */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

            /* Add a subtle shadow to cards */
        }

        .product-card .card-title {
            font-size: 18px;
            /* Increase font size for card titles */
            font-weight: bold;
            /* Make card titles bold */
            margin-bottom: 10px;
            /* color: white; */
            /* Add margin below card titles */
        }

        .product-card .card-text {
            font-size: 14px;
            /* Adjust font size for card text */
            font-weight: 700;
            /* Use a darker color for card text */
            margin-bottom: 15px;
            /* Add margin below card text */
        }

        .product-card .btn {
            background-color: #007bff;
            /* Use primary color for buttons */
            border-color: #007bff;
            /* Use primary color for button borders */
        }

        .product-card .btn:hover {
            background-color: #0056b3;
            /* Darken button color on hover */
            border-color: #0056b3;
            /* Darken button border color on hover */
        }
        .mar{
            margin-top: 100px;
        }
    </style>

    <div class="container mt-5">
        <div class="row mar" >
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card product-card">
                        <div class="product-image">
                            <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">₹{{ $product->price }}</p>
                            <button class="btn btn-primary add-to-cart" data-id="{{ $product->id }}">Add to Cart</button>
                            <!-- Toast Notification -->
                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true"
                                data-delay="5000" style="position: absolute; top: 0; right: 0;">
                                <div class="toast-body bg-success text-white">
                                    Product added to cart successfully!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Cart Modal -->
    <style>
        .modal-content {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px; /* Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        }

        .modal-title {
            color: #333; /* Set title color */
        }

        .modal-body {
            padding: 20px; /* Add padding */
        }

        .form-group label {
            color: #333; /* Set label color */
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background for inputs */
            border: none; /* Remove input borders */
            border-radius: 5px; /* Add input border-radius */
        }

        .form-control:focus {
            box-shadow: none; /* Remove focus box-shadow */
        }

        .modal-footer {
            border-top: none; /* Remove footer border */
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 0 0 10px 10px; /* Add rounded corners to the bottom */
        }
    </style>

    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="cart" class="cart-items w-100"></div>
                    <form action="{{ route('payment.makePayment') }}" method="POST" id="checkoutForm" class="mt-3" >
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="amount">Total Amount</label>
                            <input type="text" class="form-control" id="totalAmount" value="0" name="amount" readonly>
                        </div>
                        @csrf
                        <!-- Add more fields as needed -->
                        <button type="submit" class="btn btn-primary">Proceed to Checkout</button>
                    </form>
                </div>
                <div class="modal-footer">
                     <!-- Display total amount here -->

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
    // Function to calculate and display total amount
    function updateTotalAmount(cartItems) {
        var totalAmount = 0;

        // Iterate over the cart items and calculate total amount
        $.each(cartItems, function(id, item) {
            totalAmount += item.price * item.quantity;
        });

        // Display total amount
        $('#totalAmount').val(totalAmount);
    }

    // Function to update cart items
    function updateCartItems(cartItems) {
        // Clear the current cart items
        $('.cart-items').empty();

        // Iterate over the cart items and append each to the cart
        $.each(cartItems, function(id, item) {
            var cartItemHtml =
                '<div class="cart-item d-flex flex-column justify-content-center align-items-center" data-id="' +
                id + '">' +
                '<img src="' + item.image + '" alt="' + item.name +
                '" class="img-fluid mb-2">' +
                '<p>' + item.name + '</p>' +
                '<p>Quantity: <span class="item-quantity">' + item
                .quantity + '</span></p>' +
                '<p>₹' + item.price * item.quantity + '</p>' +
                '</div>';
            $('.cart-items').append(cartItemHtml);
        });
    }

    // Function to update cart and total amount
    function updateCart(response) {
        if (response && response.status === 200 && response.data) {
            var cartItems = response.data;

            // Update cart items
            updateCartItems(cartItems);

            // Update total amount
            updateTotalAmount(cartItems);
        } else {
            console.error('Error updating cart:', response.message);
        }
    }

    // Click event handler for adding to cart
    $('.add-to-cart').on('click', function() {
        var toast = $(this).siblings('.toast');
        var toastInstance = new bootstrap.Toast(toast[0]);
        $('#cart').empty();
        var productId = $(this).data('id');
        $.ajax({
            url: '{{ route('cart.add') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: productId
            },
            success: function(response) {
                updateCart(response);

                // Show toast notification
                toastInstance.show();
                setTimeout(function() {
                    toastInstance.hide();
                }, 5000); // Hide toast after 5 seconds
            },
            error: function(xhr, status, error) {
                console.error('Error updating cart:', error);
            }
        });
    });

    // Call the function to initially fetch and display total amount
    $.ajax({
        url: '{{ route('cart.get') }}', // Adjust the URL according to your route
        method: 'GET',
        success: function(response) {
            if (response && response.data) {
                updateCart(response);
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching initial cart data:', error);
        }
    });
});
    </script>
