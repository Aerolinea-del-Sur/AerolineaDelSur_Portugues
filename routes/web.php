<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Mail\envioMail;

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

// Página del Honda Jet
Route::get('/HondaJet', function () {
    return view('c_Aeronaves.HondaJet'); 
})->name('HondaJet');

// Página del Phenom 100
Route::get('/Phenom100', function () {
    return view('c_Aeronaves.Phenom100'); 
})->name('Phenom100');

// Página del Phenom 300
Route::get('/Phenom300', function () {
    return view('c_Aeronaves.Phenom300'); 
})->name('Phenom300');

// Página del Challenger 300
Route::get('/Challenger300', function () {
    return view('c_Aeronaves.Challenger300'); 
})->name('Challenger300'); 

// Página del Challenger 350
Route::get('/Challenger350', function () {
    return view('c_Aeronaves.Challenger350'); 
})->name('Challenger350'); 

// Página del Challenger 601
Route::get('/Challenger601', function () {
    return view('c_Aeronaves.Challenger601'); 
})->name('Challenger601'); 

// Página del Challenger 604
Route::get('/Challenger604', function () {
    return view('c_Aeronaves.Challenger604'); 
})->name('Challenger604'); 

// Página del Challenger 605
Route::get('/Challenger605', function () {
    return view('c_Aeronaves.Challenger605'); 
})->name('Challenger605');

// Página del Challenger 650
Route::get('/Challenger650', function () {
    return view('c_Aeronaves.Challenger650'); 
})->name('Challenger650'); 

// Página del Challenger 850
Route::get('/Challenger850', function () {
    return view('c_Aeronaves.Challenger850'); 
})->name('Challenger850'); 

// Página del Citation 550 Bravo
Route::get('/Citation550Bravo', function () {
    return view('c_Aeronaves.Citation550Bravo'); 
})->name('Citation550Bravo'); 

// Página del Citation Cj4
Route::get('/CitationCj4', function () {
    return view('c_Aeronaves.CitationCj4'); 
})->name('CitationCj4'); 

// Página del Citation Encore
Route::get('/CitationEncore', function () {
    return view('c_Aeronaves.CitationEncore'); 
})->name('CitationEncore'); 

// Página del Citation XLS
Route::get('/CitationXLS', function () {
    return view('c_Aeronaves.CitationXLS'); 
})->name('CitationXLS'); 

// Página del Citation HemisPhere
Route::get('/CitationHemisPhere', function () {
    return view('c_Aeronaves.CitationHemisPhere'); 
})->name('CitationHemisPhere'); 

// Página del Citation Latitude
Route::get('/CitationLatitude', function () {
    return view('c_Aeronaves.CitationLatitude'); 
})->name('CitationLatitude'); 

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



// Rutas para formularios de contacto
//Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'sendContact'])->name('contact.send');
//---------------------------------- CORREO ---------------------------------------------------//
/*Route::get('send-mail', [ContactController::class, 'ccemail']);
Route::get('/probar-correo', function () {
    Mail::raw('¡Hola! Este es un correo de prueba.', function ($message) {
        $message->to('destinatario@ejemplo.com')
                ->subject('Correo de prueba desde Laravel');
    });
    return 'Correo enviado (si todo está bien).';
});*/
/*
Route::get('/', 'MailController@getMail');
Route::get('/testmail', function () {
    return view('testmail');
})->name('testmail');
Route::get('/probar-correo', function () {
    Mail::raw('¡Hola! Este es un correo de prueba.', function ($message) {
        $message->to('destinatario@ejemplo.com')
                ->subject('Correo de prueba desde Laravel');
    });
    return 'Correo enviado (si todo está bien).';
});*/

/*Route::get('/send', function () {
    Mail::
        to(["connor75941@gmail.com", "aerolineadelsurperu@gmail.com"])
        ->send(new envioMail());
    return "email sent";
});*/

Route::get('/send', function () {
    try {
        Mail::to(["connor75941@gmail.com", "aerolineadelsurperu@gmail.com"])
            ->send(new envioMail());
        return "Email enviado correctamente";
    } catch (\Exception $e) {
        return "Error al enviar el correo de GooDaddy: " . $e->getMessage();
    }
});

Route::get('/test-smtp', function () {
    $host = 'smtpout.secureserver.net';
    $port = 465;
    $timeout = 10;

    echo "🔍 Probando conexión a $host:$port...<br>";

    $connection = @fsockopen($host, $port, $errno, $errstr, $timeout);

    if ($connection) {
        echo "✅ Conexión establecida a $host:$port";
        fclose($connection);
    } else {
        echo "❌ No se pudo conectar: $errstr ($errno)";
    }
});

