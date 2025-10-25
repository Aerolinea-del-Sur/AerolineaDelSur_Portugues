<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleScriptService
{
    protected $scriptUrl;

    public function __construct()
    {
        $this->scriptUrl = env('https://script.google.com/macros/s/AKfycbxa6nyU7f_npQMRoj6dDRRCDJezAUY2fECOLjBf78w-x0gaOFzpHuq0l-fJj6euS7e8/exec');

        if (empty($this->scriptUrl)) {
            throw new \Exception('⚠️ No se ha configurado la URL de Google Script en el archivo .env');
        }
    }

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
