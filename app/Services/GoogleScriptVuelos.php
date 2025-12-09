<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptVuelos
{
    protected $scriptUrl;

    public function __construct()
    {
        // Reemplaza con la URL de tu Google Apps Script
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycbwq9vTDbMb690G-H9FCTjYuq5kPzFgYAJcuk6-5B_PdxZTVJpvTos6o2jOBuUz938g3MQ/exec';
    }

    public function sendFlightData(array $data)
    {
        try {
            $response = Http::timeout(60)
                ->post($this->scriptUrl, [
                    'action' => 'createFlight', // Acción diferente para identificar en Google Script
                    'data' => $data
                ]);

            if ($response->successful()) {
                return $response->json();
            } else {
                Log::error('Error Google Script Vuelos - Status: ' . $response->status());
                return [
                    'success' => false, 
                    'error' => 'Error en el servicio externo.'
                ];
            }

        } catch (\Exception $e) {
            Log::error('Exception Google Script Vuelos: ' . $e->getMessage());
            return [
                'success' => false, 
                'error' => 'Error de conexión.'
            ];
        }
    }
}