<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptVuelos
{
    protected $scriptUrl;

    public function __construct()
    {
        // NOTA: Asegúrate de poner aquí la URL de tu Web App de Google Script para Vuelos
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycbw2j0bPWX7hkKV8tMwg6D0kv-yo2VjIhtKbsWWx7MkAB8VmUXzktqYKObUmVaOo4l908g/exec';
    }

    public function sendFlightData(array $data)
    {
        try {
            $response = Http::timeout(60)
                ->post($this->scriptUrl, [
                    'action' => 'createFlight', // Identificador para el Google Script
                    'data'   => $data
                ]);

            if ($response->successful()) {
                return $response->json();
            } else {
                Log::error('Error Google Script Vuelos - Status: ' . $response->status());
                return [
                    'success' => false, 
                    'error'   => 'Error servicio externo: ' . $response->status()
                ];
            }

        } catch (\Exception $e) {
            Log::error('Exception Vuelos: ' . $e->getMessage());
            return [
                'success' => false, 
                'error'   => 'Error de conexión'
            ];
        }
    }
}