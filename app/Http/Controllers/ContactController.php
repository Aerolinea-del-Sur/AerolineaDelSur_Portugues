<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google\Service\Gmail;
use Google\Service\Gmail\Message;

class ContactController extends Controller
{
    // ...existing code...

    public function testGmailAPI()
    {
        try {
            // Verifica la configuración del cliente
            if (!$this->client->getClientId()) {
                return response()->json(['error' => 'Client ID no configurado'], 400);
            }

            // Intenta enviar un correo de prueba
            $message = $this->createMessage(
                'test@aerolineadelsur.com',
                env('MAIL_FROM_ADDRESS'),
                'Prueba de API Gmail',
                '<h1>Esta es una prueba de la API de Gmail</h1><p>Si ves este mensaje, la API está funcionando correctamente.</p>'
            );

            $this->service->users_messages->send('me', $message);

            return response()->json([
                'success' => true,
                'message' => 'API de Gmail configurada correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }
}