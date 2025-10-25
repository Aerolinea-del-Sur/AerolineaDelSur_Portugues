<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'firstName' => 'required|string|max:100',
            'lastName'  => 'required|string|max:100',
            'email'     => 'required|email',
            'phone'     => 'nullable|string|max:20',
            'subject'   => 'required|string',
            'message'   => 'required|string',
        ]);

        // URL de tu Google Apps Script desplegado como Web App
        $url = "https://script.google.com/macros/s/AKfycbxa6nyU7f_npQMRoj6dDRRCDJezAUY2fECOLjBf78w-x0gaOFzpHuq0l-fJj6euS7e8/exec";

        // Preparar los datos
        $data = [
            'nombre'  => $validated['firstName'] . ' ' . $validated['lastName'],
            'email'   => $validated['email'],
            'telefono'=> $validated['phone'],
            'asunto'  => $validated['subject'],
            'mensaje' => $validated['message']
        ];

        // Enviar los datos a Google Apps Script
        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        // Respuesta del servidor Apps Script
        if ($result === FALSE) {
            return back()->with('error', 'Error al enviar el mensaje. Intenta nuevamente.');
        }

        $response = json_decode($result, true);

        if (isset($response['success']) && $response['success'] === true) {
            return back()->with('success', 'Tu mensaje fue enviado correctamente.');
        } else {
            return back()->with('error', 'No se pudo enviar el mensaje.');
        }
    }
}
