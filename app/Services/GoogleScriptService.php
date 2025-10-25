<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class GoogleScriptService
{
    protected $scriptUrl;

    public function __construct()
    {
        // ⚠️ Cambia por tu URL real del Apps Script
        //$this->scriptUrl = env('GOOGLE_SCRIPT_URL');
        
        $this->scriptUrl = env('https://script.google.com/macros/s/AKfycbxa6nyU7f_npQMRoj6dDRRCDJezAUY2fECOLjBf78w-x0gaOFzpHuq0l-fJj6euS7e8/exec');
    }

    /**
     * Envía los datos del formulario a Google Apps Script.
     */
    public function enviarDatos($data)
    {
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post($this->scriptUrl, $data);

            if ($response->successful()) {
                return $response->json();
            } else {
                return [
                    'success' => false,
                    'message' => 'Error en la comunicación con Apps Script',
                    'status' => $response->status(),
                    'body' => $response->body(),
                ];
            }
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Error: ' . $e->getMessage(),
            ];
        }
    }
}