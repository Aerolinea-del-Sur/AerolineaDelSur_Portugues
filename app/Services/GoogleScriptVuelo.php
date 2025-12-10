<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptVuelo
{
    protected $scriptUrl;

    public function __construct()
    {
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycbw2j0bPWX7hkKV8tMwg6D0kv-yo2VjIhtKbsWWx7MkAB8VmUXzktqYKObUmVaOo4l908g/exec';
    }

    public function sendFlightData(array $data)
    {
        try {
            $response = Http::timeout(30)->post($this->scriptUrl, [
                'action' => 'createFlightQuote',
                'payload' => $data
            ]);

            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }

            Log::error('Error API Vuelo: ' . $response->body());
            return ['success' => false, 'error' => 'Error externo (' . $response->status() . ')'];

        } catch (\Exception $e) {
            Log::error('Excepción API Vuelo: ' . $e->getMessage());
            return ['success' => false, 'error' => 'Fallo de conexión'];
        }
    }
}