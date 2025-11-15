<?php
// app/Services/GoogleScriptTurismo.php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleScriptTurismo
{
    protected $scriptUrl;

    public function __construct()
    {
        $this->scriptUrl = 'https://script.google.com/macros/s/AKfycbzgUCKsDpm4ieJr7hiy5GlYdG59A42ADg5vOVbd5SUR64SqVq4abJdgYZbnNwWknpfjbw/exec';
    }

    public function sendTourData(array $tourData)
    {
        try {
            $response = Http::timeout(60)
                ->post($this->scriptUrl, [
                    'action' => 'createTour',
                    'data' => $tourData
                ]);

            if ($response->successful()) {
                return $response->json();
            } else {
                Log::error('Error Google Script Turismo: ' . $response->body());
                return ['success' => false, 'error' => 'Error en el servicio'];
            }

        } catch (\Exception $e) {
            Log::error('Exception Google Script Turismo: ' . $e->getMessage());
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
}