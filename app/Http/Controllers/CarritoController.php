<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);

        return view('cart.index', compact('cart'));
    }

    public function agregar($request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Si el producto ya está en el carrito, aumentar la cantidad
        if (session()->has("cart.$productId")) {
            session()->put("cart.$productId", session("cart.$productId") + $quantity);
        } else {
            session()->put("cart.$productId", $quantity);
        }

        return redirect()->route('cart.index');
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');
        session()->forget("cart.$productId");

        return redirect()->route('cart.index');
    }

    public function updateCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        if ($quantity === '0') {
            session()->forget("cart.$productId");
        } else {
            session()->put("cart.$productId", $quantity);
        }

        return redirect()->route('cart.index');
    }
}
