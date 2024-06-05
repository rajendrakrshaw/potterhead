@include('layouts.app')

<div class="container mt-10" >
    <div class="modal-dialog" role="document">
        <div class="modal-content " style="margin-top: 150px;  background-color: rgba(255, 255, 255, 0.8)">
            <h1>Payment</h1>
            <form action="{{ route('payment.success') }}" method="GET">
                <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZORPAY_KEY') }}"
                    data-amount="{{ $order->amount }}" data-currency="INR" data-name="Potterhead" data-description="Test Transaction"
                    data-image="https://your-awesome-site.com/logo.png" data-prefill.name="Rajendra Kumar Shaw"
                    data-prefill.email="rajendra250601@gmail.com" data-theme.color="#F37254"></script>
                <input type="hidden" value="{{ $order->id }}" name="razorpay_order_id">
                <input type="hidden" value="INR" name="razorpay_currency">
                <input type="hidden" value="{{ $order->amount }}" name="razorpay_amount">
                <input type="hidden" value="Potterhead" name="razorpay_merchant_name">
                <input type="hidden" value="Payment for Order ID: {{ $order->id }}" name="razorpay_description">
                <input type="hidden" value="{{ env('APP_URL') }}/payment/failure" name="razorpay_cancel_url">
                {{-- <button type="submit" class="btn btn-primary">Pay With Razorpay</button> --}}
            </form>


        </div>
    </div>
</div>
