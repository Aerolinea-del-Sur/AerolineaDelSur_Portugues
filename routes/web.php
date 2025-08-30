<?php

use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', function () {
    return view('a_EncabezadoFooter.princi');
})->name('home');
//---------------------------------- CONTENIDO DE FOOTER + INICIO ---------------------------------------------------//
// codigo essna
Route::get('/esna', function () {
    return view('h_footer.esna');
})->name('esna');
//codigo pagos
Route::get('/pagos', function () {
    return view('h_footer.pagos');
})->name('pagos');
//politicas de privacidad
Route::get('/privaty', function () {
    return view('h_footer.privaty');
})->name('privaty');
//terminos y condiciones
Route::get('/terminos', function () {
    return view('h_footer.terminos');
})->name('terminos');
//Libro de reclamaciones
Route::get('/libro', function () {
    return view('h_footer.libro'); 
})->name('libro');
//---------------------------------- CONTENIDO DE FOOTER + FIN    ---------------------------------------------------//
// Página principal
Route::get('/', function () {
    return view('a_EncabezadoFooter.inicio');
})->name('inicio');

// Página de nosotros
Route::get('/nosotros', function () {
    return view('b_nosotros.nosotros');
})->name('nosotros');

// Página de servicio
Route::get('/servicio', function () {
    return view('d_Servicio.servicio');
})->name('servicio');

// Página de aeronaves
Route::get('/aeronaves', function () {
    return view('c_Aeronaves.aeronaves');
})->name('aeronaves');
//---------------------------------- CONTENIDO DE FLOTA + INICIO ---------------------------------------------------//

// Página del Avión King Air B200
Route::get('/aeronaves/king-air-b200', function () {
    return view('c_Aeronaves.king-air-b200');
})->name('agencia');

//---------------------------------- CONTENIDO DE FLOTA + FIN    ---------------------------------------------------//

// Página de agencia
Route::get('/agencia', function () {
    return view('e_Agencia.agencia');
})->name('agencia');
//---------------------------------- CONTENIDO DE AGENCIA + INICIO ---------------------------------------------------//


//---------------------------------- CONTENIDO DE AGENCIA + FIN    ---------------------------------------------------//

// Página de blog
Route::get('/blog', function () {
    return view('f_Blog.blog');
})->name('blog');
//---------------------------------- CONTENIDO DE BLOG + INICIO ---------------------------------------------------//


//---------------------------------- CONTENIDO DE BLOG + FIN    ---------------------------------------------------//

// Página de contacto
Route::get('/contacto', function () {
    return view('g_contactos.contacto');
})->name('contacto');
