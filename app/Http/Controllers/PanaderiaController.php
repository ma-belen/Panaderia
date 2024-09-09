<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mercancia; 
use App\Models\usuario; 

class PanaderiaController extends Controller
{
    public function Vista(){
        return view('diseño');
    }

    public function Vista1(){
        return view('vista1Promocion');
    }

    public function Vista2(){
        return view('vista2Productos');
    }
    
    public function AgregarUser(){
        return view('vista3Formulario');
    }

    public function AgregarUsuario(Request $request){
        $registro =new usuario;
        $registro->nombre = $request->nombre;
        $registro->apellido = $request->apellido;
        $registro->correo= $request->correo;
        $registro->contraseña = $request->contraseña;
       
        $registro->save();
    }

    public function Login(Request $request){
        $correo=$request->correo;
        $contra=$request->contraseña;
        $usuarios= DB::select('select * from usuarios where correo="'.$correo.'" and contraseña="'.$contra.'"');

        if($usuarios != null){
            if ($correo == "belen03@gmail.com"){
                return redirect()->route('admin');
            }
            else{
                return redirect()->route('vista1');
            }
        } else {
            return redirect()->route('Login');
        }
    }

    public function Vista4(){
        return view('vista4Registro');
    }
    
    public function Vista5(){
        return view('vista5Agregar');
    }

    public function Vista6(){
        $productos = DB::table('productos')->get();
        return view('tablaProductos', ['productos' => $productos]);
    }

    public function Vista7(){
        $cliente = DB::table('cliente')->get();
        return view('tablaClientes', ['cliente' => $cliente]);
    }

    public function SobreNosotros(){
        return view('nosotros');
    }

    public function Pan(){
        $pan = DB::table('pan')->get();
        return view('panPromocion', ['pan' => $pan]);
    }

    public function Pastel(){
        $pastel = DB::table('pastel')->get();
        return view('pastelPromocion', ['pastel' => $pastel]);
    }

    public function Gelatina(){
        $gelatina= DB::table('gelatina')->get();
        return view('gelatinaPromocion', ['gelatina' => $gelatina]);
    }

    public function AgregarInter(){
        return view('pagAdministrador');
    }

    public function AgregarInfo(Request $request){
        $registro =new mercancia;
        $foto= $request->file('foto');
        $nom= time().'.'. $foto->getClientOriginalExtension();
        $destino= public_path('img');
        $request->foto->move($destino,$nom);
        $registro->fotografia= $nom;
        $registro->codigo= $request->codigo;
        $registro->tipo = $request->tipo;
        $registro->nombre_producto = $request->nombre_producto;
        $registro->tamaño = $request->tamaño;
        $registro->precio = $request->precio;
        $registro->cantidad = $request->cantidad;
       
        $registro->save();
        return redirect()->route('admin');
    }

    public function MostrarBD(){
        $mercancias = DB::table('mercancias') -> get();
        return view('pagMostrarAdmi',['mercancias' => $mercancias] );
    }

    public function MostrarInfo(){
        $mercancias= DB::table('mercancias')->get();
        return view('pagMostrarAdmi', ['mercancias' => $mercancias]);
    }

    public function MostrarUsuario(){
        $usuarios= DB::table('usuarios')->get();
        return view('pagMostrarUsuario', ['usuarios' => $usuarios]);
    }

    public function detalle($id){
        $mercancia = mercancia::find($id);
        return view('detalle',['mercancia' => $mercancia]);
    }

    public function carrito(){
        return view('carrito');
    }

    public function AgregaCarrito($id){
        $mercancia = mercancia::find($id);
        $carrito = session()->get('carrito');
        if(!$carrito){
            $carrito= [
                $id => [
                    "nombre" => $mercancia->nombre_producto,
                    "cantidad" => 1,
                    "precio" => $mercancia->precio
                ]
                ];
                session()->put('carrito',$carrito);
                return redirect()->back()->with('success','Producto agregado al carrito');  
        }
        if(isset($carrito[$id])){
            $carrito[$id]['cantidad']++;
            session()->put('carrito',$carrito);
            return redirect()->back()->with('success','Producto agregado al carrito');
        }
        $carrito[$id]=[
            "nombre" => $mercancia->nombre_producto,
            "cantidad" =>1,
            "precio" => $mercancia->precio
        ];
        session()->put('carrito',$carrito);
        return redirect()->back()->with('success','Producto agregado al carrito');
    }
}

