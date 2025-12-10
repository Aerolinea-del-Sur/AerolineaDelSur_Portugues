<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptVuelo
{
    protected $scriptUrl;

    public function __construct()
    {
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycbxYnMwwLj4orM6V7TIlc5Ud5ZDwcsl4W7UNvWJ3BbGRwDedwvYO0U-dnymLr6R6GtxgUg/exec';
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