<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Transaction;
use Razorpay\Api\Api;

// class PaymentController extends Controller
// {
    //use Braintree_Transaction;
// public function process(Request $request)
// {
//     $payload = $request->input('payload', false);
//     $nonce = $payload['nonce'];

//     $status = Transaction::sale([
// 	'amount' => '50.00',
// 	'paymentMethodNonce' => $nonce,
// 	'options' => [
// 	    'submitForSettlement' => True
// 	]
//     ]);

//     return response()->json($status);
// }
// }
// use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment');
    }
    // public function makeOrder(Request $request){
    //     $this->validate($request,[
    //         'amount' => 'required|numeric'
    //     ]);
    // }
    public function makePayment(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            // Add more fields as needed
        ]);

        $amount = intval($request->get('amount')) * 100;
        $order = $api->order->create([
            'amount' => $amount,
            'currency' => 'INR',
            'payment_capture' => 1,
        ]);

        $orderId = $order['id'];
        $validatedData['order_id'] = $orderId;
        $validatedData['amount'] = $amount;

        $request->session()->put('order_info', $validatedData);
        return view('razorpay', compact('order'));
    }

    public function paymentSuccess()
    {
        return view('payment-success');
    }

    public function paymentFailure()
    {
        return view('payment-failure');
    }
}
