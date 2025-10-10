<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptAeronaves;

class AircraftController extends Controller
{
    public function requestInfo(Request $request, GoogleScriptAeronaves $googleScript)
    {
        // Validar datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:50',
            'country' => 'required|string',
            'date' => 'required|date',
            'message' => 'nullable|string|max:1000',
            'aircraft' => 'required|string|max:100',
        ]);

        // Enviar los datos al Google Apps Script
        $result = $googleScript->sendEmail($validated);

        // Devolver respuesta JSON (usada por tu JS)
        return response()->json($result);
    }
}
