<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;



class HomeController extends Controller
{
    public function home($nombre){
        return view("home", compact("nombre"));
    }

    public function prueba()
    {
        // Crear una instancia de Guzzle Client
        $client = new Client([
            'base_uri' => 'http://localhost:8787/api', // Reemplaza con la URL de tu proyecto Spring Boot
            'timeout'  => 2.0, // Tiempo máximo de espera en segundos
        ]);

        try {
            // Realizar una solicitud GET a una ruta específica en tu aplicación Spring Boot
            $response = $client->request('GET', 'prueba');
            
            // Obtener el código de estado de la respuesta
            $statusCode = $response->getStatusCode();
            
            // Obtener el cuerpo de la respuesta como una cadena JSON
            $body = $response->getBody()->getContents();
            
            // Puedes manejar la respuesta aquí según tus necesidades
            return $body;
        } catch (\Exception $e) {
            // Manejar cualquier error que ocurra durante la solicitud
            return $e->getMessage();
        }
    }
}
