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

// Página del Avión Gulfstream G100
Route::get('/GulfstreamG100', function () {
    return view('c_Aeronaves.GulfstreamG100');
})->name('GulfstreamG100');

// Página del Avión Gulfstream G IV
Route::get('/GulfstreamGIV', function () {
    return view('c_Aeronaves.GulfstreamGIV'); 
})->name('GulfstreamGIV');

//---------------------------------- CONTENIDO DE FLOTA + FIN    ---------------------------------------------------//

// Página de agencia
Route::get('/agencia', function () {
    return view('e_Agencia.agencia');
})->name('agencia');

//---------------------------------- CONTENIDO DE AGENCIA + INICIO ---------------------------------------------------//

// Página de agencia
Route::get('/VPMachuPichu', function () {
    return view('e_Agencia.VPMachuPichu');
})->name('VPMachuPichu');

// Página de agencia
Route::get('/Vinicunca', function () {
    return view('e_Agencia.Vinicunca');
})->name('Vinicunca'); 

// Página de agencia
Route::get('/VinEliteExp', function () {
    return view('e_Agencia.VinEliteExp');
})->name('VinEliteExp');

// Página de agencia
Route::get('/TesorosCusco', function () {
    return view('e_Agencia.TesorosCusco');
})->name('TesorosCusco');

// Página de agencia
Route::get('/AndesMagicos', function () {
    return view('e_Agencia.AndesMagicos');
})->name('AndesMagicos');

// Página de agencia
Route::get('/ValleMaras', function () {
    return view('e_Agencia.ValleMaras');
})->name('ValleMaras');

// Página de agencia
Route::get('/VinEliteExp', function () {
    return view('e_Agencia.VinEliteExp');
})->name('VinEliteExp');

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
