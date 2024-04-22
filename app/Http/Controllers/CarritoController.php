<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{

    // Inicializar el carrito en el controlador
    public function inicio(){

        $carrito = session('carrito', []);

        return view('carrito', compact('carrito'));

    }

    public function agregarAlCarrito($producto) {
        $carrito = session('carrito');
        array_push($carrito, $producto);
        session()->put('carrito', $carrito);
    }

    public function agregarProductoAlCarrito(Request $request) {
        // Obtener el producto enviado desde la solicitud
        $producto = $request->input('producto');
    
        // Inicializar el carrito si aún no ha sido inicializado
        if (!session()->has('carrito')) {
            session()->put('carrito', []);
        }
    
        // Obtener el carrito actual de la sesión
        $carrito = session()->get('carrito');
    
        // Agregar el producto al carrito
        array_push($carrito, $producto);
    
        // Actualizar el carrito en la sesión
        session()->put('carrito', $carrito);
    
        // Devolver una respuesta de éxito
        return view('carrito');
    }
    

    /*public function agregarProductoAlCarrito(Request $request) {
        $producto = $request->all(); // Obtener los datos del producto del formulario
        $this->agregarAlCarrito($producto);
        return redirect()->back(); // Redireccionar de vuelta a la página del carrito
    }*/
    


   /* public function index()
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
*/
}
