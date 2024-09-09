<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanaderiaController;

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[PanaderiaController::class,'Vista']);

Route::get('/vista1',[PanaderiaController::class,'Vista1'])->name("vista1");

Route::get('/vista2',[PanaderiaController::class,'Vista2']);

Route::get('/vista3',[PanaderiaController::class, 'AgregarUser']);

/*Logeo para el adminitrador y el usuario*/
Route::get('/vista4',[PanaderiaController::class,'Vista4'])->name('Login');

Route::post('/logiin',[PanaderiaController::class, 'Login'])->name('loginin');

Route::get('/vista5',[PanaderiaController::class,'Vista5']);

Route::get('/vista6',[PanaderiaController::class,'Vista6']);

Route::get('/vista7',[PanaderiaController::class,'Vista7']);

Route::get('/nosotros',[PanaderiaController::class,'SobreNosotros']); 

Route::get('/panPromo',[PanaderiaController::class,'Pan']); 

Route::get('/pastelPromo',[PanaderiaController::class,'Pastel']); 

Route::get('/gelatinaPromo',[PanaderiaController::class,'Gelatina']); 

/*Ruta para la página del administrador*/
Route::get('rutaAgregarInter',[PanaderiaController::class, 'AgregarInter'])->name("admin");

Route::post('/AgregarBD',[PanaderiaController::class, 'AgregarInfo'])->name('AgregarBD');

/*Ruta para mostrar la información que agrego el administrador*/
Route::get('/rutaMostrarInfo',[PanaderiaController::class,'MostrarInfo']); 

/*Ruta para agregar y mostrar a los usuarios*/
Route::post('/',[PanaderiaController::class, 'AgregarUsuario'])->name('Usuario');

Route::get('/rutaMostrarUsers',[PanaderiaController::class,'MostrarUsuario']); 

/*Carrito de compras*/
Route::get('/rutaCarrito',[PanaderiaController::class,'carrito']);

Route::get('rutaDetalle/{id}',[PanaderiaController::class,'detalle']); 

Route::get('AgregaCarrito/{id}',[PanaderiaController::class,'AgregaCarrito']); 

