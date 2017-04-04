<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    return "Holaa mundo";
});

Route::get('prueba2/{qwerty}', function ($nombre) {
    return "Bienvenido ".$nombre;
});


Route::get('prueba3/{qwerty}/otro/{qweqwe}', function ($nombre, $apellido) {
    return "Bienvenido ".$nombre." ".$apellido;
});

Route::get('persona/index','PersonaController@index');

Route::get('post/index','PostController@index');
