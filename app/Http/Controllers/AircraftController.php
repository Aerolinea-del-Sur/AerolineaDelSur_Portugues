<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptAeronavesService;

class AircraftController extends Controller
{
    protected $googleScriptService;

    public function __construct(GoogleScriptAeronavesService $googleScriptService)
    {
        $this->googleScriptService = $googleScriptService;
    }

    public function sendAircraftInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'aircraft' => 'required|string|max:255',
            'country' => 'required|string|max:100',
            'date' => 'required|date',
            'message' => 'nullable|string'
        ]);

        // Enviar datos a Google Apps Script
        $response = $this->googleScriptService->enviarSolicitudAeronave($validated);

        return response()->json($response);
    }
}