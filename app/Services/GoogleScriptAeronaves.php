<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptAeronavesService
{
    protected $scriptUrl;

    public function __construct()
    {
        // URL de tu Google Apps Script para aeronaves
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycbxvfXR6xT4PHlPN5xRtum-MpjjFGgeHtUtNhhlubC7yCxNFeXGB1ZmhYsjthogFDIJeqg/exec';
    }

    public function enviarSolicitudAeronave($data)
    {
        try {
            Log::info("📤 Enviando solicitud de aeronave a Apps Script", $data);

            $response = Http::timeout(30)
                ->withHeaders([
                    'Content-Type' => 'application/json',
                ])
                ->post($this->scriptUrl, $data);

            Log::info("📥 Respuesta de Apps Script: " . $response->body());

            return $response->json();

        } catch (\Exception $e) {
            Log::error("💥 Error enviando solicitud de aeronave: " . $e->getMessage());
            
            return [
                'success' => false,
                'error' => 'Error de conexión: ' . $e->getMessage()
            ];
        }
    }
}