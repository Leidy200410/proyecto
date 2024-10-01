<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/empleado/show', function () {
    return view('empleado.show');
});

Route::get('/empleado/create', function () {
    return view('empleado.create'); 
});

Route::get('/empleado/update', function () {
    return view('empleado.update'); 
});

Route::get('/usuario/show', function () {
    return view('usuario.show');
});

Route::get('/usuario/create', function () {
    return view('usuario.create'); 
});

Route::get('/usuario/update', function () {
    return view('usuario.update'); 
});

Route::get('/equipo/show', function () {
    return view('equipo.show');
});

Route::get('/equipo/create', function () {
    return view('equipo.create'); 
});

Route::get('/equipo/update', function () {
    return view('equipo.update'); 
});

Route::get('/prestamo/show', function () {
    return view('prestamo.show');
});

Route::get('/prestamo/create', function () {
    return view('prestamo.create'); 
});

Route::get('/prestamo/update', function () {
    return view('prestamo.update'); 
});

Route::get('/informes/show', function () {
    return view('informes.show');
});

Route::get('/informes/create', function () {
    return view('informes.create'); 
});

Route::get('/informes/update', function () {
    return view('informes.update'); 
});

Route::get('/pago/show', function () {
    return view('pago.show');
});

Route::get('/pago/create', function () {
    return view('pago.create'); 
});

Route::get('/pago/update', function () {
    return view('pago.update'); 
});

Route::get('/devolucion/show', function () {
    return view('devolucion.show');
});

Route::get('/devolucion/create', function () {
    return view('devolucion.create'); 
});

Route::get('/devolucion/update', function () {
    return view('devolucion.update'); 
});

Route::get('/mora/show', function () {
    return view('mora.show');
});

Route::get('/mora/create', function () {
    return view('mora.create'); 
});

Route::get('/mora/update', function () {
    return view('mora.update'); 
});

