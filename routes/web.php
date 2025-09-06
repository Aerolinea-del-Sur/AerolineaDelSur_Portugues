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

// Página del Avión BombardierChallenger601
Route::get('/BombardierChallenger601 ', function () {
    return view('c_Aeronaves.BombardierChallenger601 ');
})->name('BombardierChallenger601 ');

// Página del Avión BombardierChallenger604
Route::get('/BombardierChallenger604 ', function () {
    return view('c_Aeronaves.BombardierChallenger604 ');
})->name('BombardierChallenger604 ');

// Página del Avión BombardierChallenger605
Route::get('/BombardierChallenger605 ', function () {
    return view('c_Aeronaves.BombardierChallenger605 ');
})->name('BombardierChallenger605 ');

// Página del Avión BombardierChallenger650
Route::get('/BombardierChallenger650 ', function () {
    return view('c_Aeronaves.BombardierChallenger650 ');
})->name('BombardierChallenger650 ');

// Página del Avión Challenger300
Route::get('/Challenger300 ', function () {
    return view('c_Aeronaves.Challenger300 ');
})->name('Challenger300 ');

// Página del Avión Challenger350
Route::get('/Challenger350 ', function () {
    return view('c_Aeronaves.Challenger350 ');
})->name('Challenger350 ');

// Página del Avión Challenger850
Route::get('/Challenger850 ', function () {
    return view('c_Aeronaves.Challenger850 ');
})->name('Challenger850 ');

// Página del Avión Citation550Bravo
Route::get('/Citation550Bravo ', function () {
    return view('c_Aeronaves.Citation550Bravo ');
})->name('Citation550Bravo ');

// Página del Avión CitationCj4
Route::get('/CitationCj4 ', function () {
    return view('c_Aeronaves.CitationCj4 ');
})->name('CitationCj4 ');

// Página del Avión CitationEncore
Route::get('/CitationEncore ', function () {
    return view('c_Aeronaves.CitationEncore ');
})->name('CitationEncore ');

// Página del Avión CitationExcel
Route::get('/CitationExcel ', function () {
    return view('c_Aeronaves.CitationExcel ');
})->name('CitationExcel ');

// Página del Avión CitationHemisPhere
Route::get('/CitationHemisPhere ', function () {
    return view('c_Aeronaves.CitationHemisPhere ');
})->name('CitationHemisPhere ');

// Página del Avión CitationLatitude
Route::get('/CitationLatitude ', function () {
    return view('c_Aeronaves.CitationLatitude ');
})->name('CitationLatitude ');

// Página del Avión EmbraerPhenom300
Route::get('/EmbraerPhenom100 ', function () {
    return view('c_Aeronaves.EmbraerPhenom100 ');
})->name('EmbraerPhenom100 ');

// Página del Avión EmbraerPhenom300
Route::get('/EmbraerPhenom300 ', function () {
    return view('c_Aeronaves.EmbraerPhenom300 ');
})->name('EmbraerPhenom300 ');

// Página del Avión Gulfstream
Route::get('/Gulfstream', function () {
    return view('c_Aeronaves.Gulfstream');
})->name('Gulfstream');
// Página del Avión Gulfstream G100
Route::get('/GulfstreamG100', function () {
    return view('c_Aeronaves.GulfstreamG100');
})->name('GulfstreamG100');

// Página del Avión Gulfstream G100
Route::get('/HondaJet', function () {
    return view('c_Aeronaves.HondaJet');
})->name('HondaJet');

// Página del Avión King Air B200
Route::get('/KingAir200', function () {
    return view('c_Aeronaves.KingAir200');
})->name('KingAir200');

// Página del Avión Mi8-MTV
Route::get('/Mi8-MTV', function () {
    return view('c_Aeronaves.Mi8-MTV');
})->name('Mi8-MTV');

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
