<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleScriptService
{
    public function sendEmail(array $data)
    {
        // ⚠️ Reemplaza esta URL con la URL desplegada de tu Google Apps Script (tipo web app)
        $scriptUrl = 'https://script.google.com/macros/s/AKfycbxlTcuUuJKsLsi-BinyqkCEqttZAKjwCxZ6FImAee3ctMOw31bSnaZSeikj5Zrhvb_bpQ/exec';

        // Enviar los datos en formato JSON
        $response = Http::post($scriptUrl, $data);

        // Decodificar respuesta
        if ($response->successful()) {
            $json = $response->json();

            return [
                'success' => $json['success'] ?? false,
                'message' => $json['message'] ?? 'Sin mensaje'
            ];
        } else {
            return [
                'success' => false,
                'error' => 'Error HTTP: ' . $response->status()
            ];
        }
    }
}
