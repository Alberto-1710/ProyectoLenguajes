<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;



class HomeController extends Controller
{
    public function home($nombre){
        return view("home", compact("nombre"));
    }

    public function carrito(){
        return view('carrito');
    }

    public function factura(){
        return view('factura');
    }

    public function login(){
        return view('login');
    }

    public function realizarPago(){
        return view('pago');
    }

    public function reportes($id, $categoria){
        if($id=!null)
        return view('reporteUsuarioCliente');
        else{
            if($categoria==1){
                return view('reporteVentasCategoria');
            }
            return view('reporteVentasVendedor');
        }
    }

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    
    public function saludo($nombre){

        $response = $this->client->request('GET', 'api/home/'.$nombre);

        $body = $response->getBody()->getContents(); 

        return $body;

    }
   

    public function crearUsuario(Request $request)
    {  
        $usuario = $request->input('usuario');
        $contrasenia = $request->input('contrasenia');

        try {
            $body = [
                'usuario' => $usuario,
                'contrasenia' => $contrasenia];
            // Realizar una solicitud GET a una ruta específica en tu aplicación Spring Boot
            //$response = $client->request('GET', 'home/Sofia');
            $response = $this->client->request('POST', 'api/usuario/crear', [
                'json' => $body // Enviar el cuerpo como JSON
            ]);
            
            // Obtener el código de estado de la respuesta
            $statusCode = $response->getStatusCode();
            
            // Obtener el cuerpo de la respuesta como una cadena JSON
            $body = $response->getBody()->getContents();
            
            // Puedes manejar la respuesta aquí según tus necesidades
            return view('home');

        } catch (\Exception $e) {
            // Manejar cualquier error que ocurra durante la solicitud
            return $e->getMessage();
        }
    }

    public function validarUsuario(Request $request)
    {  
        $usuario = $request->input('usuario');
        $contrasenia = $request->input('contrasenia');

        try {
            $body = [
                'usuario' => $usuario,
                'contrasenia' => $contrasenia];
            // Realizar una solicitud GET a una ruta específica en tu aplicación Spring Boot
            //$response = $client->request('GET', 'home/Sofia');
            $response = $this->client->request('POST', 'api/usuario/login', [
                'json' => $body // Enviar el cuerpo como JSON
            ]);
            
            // Obtener el código de estado de la respuesta
            $statusCode = $response->getStatusCode();
            
            // Obtener el cuerpo de la respuesta como una cadena JSON
            $body = $response->getBody()->getContents();
            
            // Puedes manejar la respuesta aquí según tus necesidades
            return view('home');

        } catch (\Exception $e) {
            // Manejar cualquier error que ocurra durante la solicitud
            return $e->getMessage();
        }
    }


}
