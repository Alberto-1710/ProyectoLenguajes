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


    public function prueba()
    {
        // Crear una instancia de Guzzle Client
        $client = new Client([
        
            //'base_uri' => 'http://localhost:8787/api/',
            //'base_uri' => 'http://localhost:8787/api/usuario/crear', // Reemplaza con la URL de tu proyecto Spring Boot
            //'timeout'  => 2.0, // Tiempo máximo de espera en segundos

            $url = 'http://localhost:8787/api/usuario/crear',

            $body = [
                'usuario' => 'caballeros',
                'contrasenia' => 'delzobaco'
        ]]);

        try {
            // Realizar una solicitud GET a una ruta específica en tu aplicación Spring Boot
            //$response = $client->request('GET', 'home/Sofia');
            $response = $client->post($url, [
                'json' => $body // Enviar el cuerpo como JSON
            ]);

            
            // Obtener el código de estado de la respuesta
            $statusCode = $response->getStatusCode();
            
            // Obtener el cuerpo de la respuesta como una cadena JSON
            $body = $response->getBody()->getContents();
            
            // Puedes manejar la respuesta aquí según tus necesidades
            return "Usuario creado";
        } catch (\Exception $e) {
            // Manejar cualquier error que ocurra durante la solicitud
            return $e->getMessage();
        }
    }
}
