<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleScriptService
{
    public function sendEmail(array $data)
    {
        // URL de tu Google Apps Script desplegado como web app
        $scriptUrl = env('https://script.google.com/macros/s/AKfycbxlTcuUuJKsLsi-BinyqkCEqttZAKjwCxZ6FImAee3ctMOw31bSnaZSeikj5Zrhvb_bpQ/exec'); // mejor si lo guardas en .env

        try {
            $response = Http::post($scriptUrl, $data);

            if ($response->successful()) {
                return ['success' => true];
            }

            return [
                'success' => false,
                'error' => $response->body()
            ];

        } catch (\Exception $e) {
            return [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
    }
}
