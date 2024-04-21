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

        $segundoNombre = $request->input('segundoNombre');
        $primerApellido = $request->input('primerApellido');
        $segundoApellido = $request->input('segundoApellido');
        $telefono = $request->input('telefono');
        $email = $request->input('correo');
        $dni = $request->input('dni');
        $genero = $request->input('genero');
        $fechaNacimiento = $request->input('fechaNacimiento');
        $pais = $request->input('pais');
        $departamento = $request->input('departamento');
        $municipio = $request->input('municipio');
        $aldea = $request->input('aldea');
        $colonia = $request->input('colonia');
        $referencia = $request->input('referencia');
        $usuario = $request->input('usuario');
        $contrasenia = $request->input('contrasenia');



        try {
            $body = [
                'primerNombre' => $request->input('primerNombre'),
                'segundoNombre' => $segundoNombre,
                'primerApellido' => $primerApellido,
                'segundoApellido' => $segundoApellido,
                'telefono' => $telefono,
                'email' => $email,
                'dni' => $dni,
                'genero' => $genero,
                'fechaNacimiento' => $fechaNacimiento,
                'usuarios'=> [
                    'usuario' => $usuario,
                'contrasenia' => $contrasenia,
                ],
                'direcciones'=> [
                    'pais' => $pais,
                'departamento' => $departamento,
                'municipio' => $municipio,
                'aldea' => $aldea,
                'colonia' => $colonia,
                'referencia' => $referencia,
                ]
                
            
                
            ];
            // Realizar una solicitud GET a una ruta específica en tu aplicación Spring Boot
            //$response = $client->request('GET', 'home/Sofia');
            $response = $this->client->request('POST', 'api/persona/crear', [
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
