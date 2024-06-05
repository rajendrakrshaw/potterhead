<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }


    public function checkout(Request $request)
    {
        // Logic to process checkout
    }
    public function getCart()
    {
        $cart = session()->get('cart', []);
        if(count($cart) > 0){
            return response()->json(
                [
                    'status' => 200,
                    'data' => $cart
                ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'No items found'
            ]);
        }
    }


    public function addToCart(Request $request)
    {
    $product = Product::find($request->id);
    if ($product) {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
        } else {
            $cart[$request->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'success' => 'Product added to cart!',
            'status' => 200,
            'data' => $cart
        ]);
    } else {
        return response()->json([
            'status' => 404,
            'message' => 'Product not found'
        ]);
    }
}



}
