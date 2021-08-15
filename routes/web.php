<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('administracion')->group(function(){
	Route::get('/',function(){
		return view('index');
	});

	Route::get('movimientos',function(){
		return view('movimiento');
	});

	Route::get('caja',function(){
		return view('caja');
	});

	Route::get('colegiaturas',function(){
		return view('colegiatura');
	});

	Route::get('usuarios',function(){
		return view('usuarios');
	});

	Route::get('cuentas',function(){
		return view('cuentasbancarias');
	});

	Route::get('registro_alumnos',function(){
		return view('alumnos');
	});

	Route::get('historialColegiatura',function(){
		return view('histocolegiatura');
	});

});