<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\RequestException; //para validacion 
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

    public function loginAdmin(){
        return view('loginAdmin');
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
        $primerNombre = $request->input('primerNombre');
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
                'primerNombre' => $primerNombre,
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
    {   $usuario = $request->input('usuario');
        $contrasenia = $request->input('contrasenia');

        try {

            $body = [
                'usuario' => $usuario,
                'contrasenia' => $contrasenia,
            ];
            // Realizar la solicitud al backend
            $response = $this->client->request('POST', 'api/usuario/login', [
                'json' => $body // Enviar el cuerpo como JSON
            ]);

            // Obtener el cuerpo de la respuesta
            $body = $response->getBody()->getContents();
            // Manejar la respuesta del servidor
            return redirect()->route('home.usuario');

           
        } catch (RequestException $e) {
            // Manejar errores de solicitud
            if ($e->hasResponse()) {
                // Obtener el código de estado del error
                $statusCode = $e->getResponse()->getStatusCode();
                if ($statusCode === 401) {
                    return redirect()->route('loginuser.home')->with('alerta', 'Contraseña incorrecta');
                    
                } elseif ($statusCode === 404) {
                    return redirect()->route('loginuser.home')->with('alerta', 'Usuario no existe');
                } else {
                    return redirect()->route('loginuser.home')->with('alerta', 'Error desconocido!');
                }
                
                
            }
        }

        return view('home');
    }

    public function validarAdmin(Request $request)
    {
        $usuario = $request->input('usuario');
        $contrasenia = $request->input('contrasenia');
    
        if ($usuario == "admin" && $contrasenia == "root") {
            return redirect()->route('admin.home');
        }
        
        // Si la validación falla, redirigir al usuario administrador a la ruta de inicio de sesión
        return redirect()->route('loginadmin.home')->with('alerta', 'Usuario o contraseña incorrectos');
    }

    public function agregarProducto(Request $request){
        
        $nombre = $request->input('nombre');
        $precio = $request->input('precio');
        $descripcion = $request->input('descripcion');
        $cantidadStock = $request->input('cantidadStock');
        $categorias = $request->input('categorias');


try {
            $body = [
                'nombre' => $nombre,
                'precio' => $precio,
                'descripcion' => $descripcion,
                'cantidadStock' => $cantidadStock,                
                'categorias'=> [
                    'nombre' => $categorias
                ]
                
            
                
            ];

            $response = $this->client->request('POST', 'api/producto/crear', [
                'json' => $body 
            ]);
            
            $statusCode = $response->getStatusCode();
            
            $body = $response->getBody()->getContents();
            
            return view('vistaAdministrador');

        } catch (\Exception $e) {
            // Manejar cualquier error que ocurra durante la solicitud
            return $e->getMessage();
        }
    }


    
}
