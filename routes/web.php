<?php

use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', function () {
    return view('a_EncabezadoFooter.princi');
})->name('home');
// Página principal
Route::get('/', function () {
    return view('a_EncabezadoFooter.inicio');
})->name('inicio');

// Página de nosotros
Route::get('/nosotros', function () {
    return view('b_nosotros.nosotros');
})->name('nosotros');

// Página de flota aérea
Route::get('/flota', function () {
    return view('c_FlotaAerea.flota');
})->name('flota');

// Página de servicios
Route::get('/servicios', function () {
    return view('d_Servicio.servicio');
})->name('servicios');

// Página de agencia
Route::get('/agencia', function () {
    return view('e_Agencia.agencia');
})->name('agencia');

// Página de blog
Route::get('/blog', function () {
    return view('f_Blog.blog');
})->name('blog');

// Página de contacto
Route::get('/contacto', function () {
    return view('g_contactos.contacto');
})->name('contacto');
