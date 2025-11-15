<?php
// app/Http/Controllers/TurismoController.php

namespace App\Http\Controllers;

use App\Services\GoogleScriptTurismo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TurismoController extends Controller
{
    protected $googleScriptService;

    public function __construct(GoogleScriptTurismo $googleScriptService)
    {
        $this->googleScriptService = $googleScriptService;
    }

    public function showForm()
    {
        return view('turismo');
    }

    public function sendTourRequest(Request $request)
    {
        // Validar los datos
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'tourDate' => 'required|date|after_or_equal:today',
            'tourName' => 'required|string',
            'passengers' => 'required|integer|min:1|max:6',
            'specialRequests' => 'nullable|string|max:500'
        ], [
            'fullName.required' => 'El nombre completo es obligatorio',
            'email.required' => 'El correo electrónico es obligatorio',
            'email.email' => 'El formato del correo electrónico no es válido',
            'phone.required' => 'El teléfono es obligatorio',
            'tourDate.required' => 'La fecha del tour es obligatoria',
            'tourDate.after_or_equal' => 'La fecha del tour no puede ser anterior a hoy',
            'passengers.required' => 'El número de pasajeros es obligatorio',
            'passengers.min' => 'Debe haber al menos 1 pasajero',
            'passengers.max' => 'Máximo 6 pasajeros permitidos'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor corrige los errores del formulario',
                'errors' => $validator->errors()
            ], 422);
        }

        // Preparar datos para Google Apps Script
        $tourData = [
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'tourDate' => $request->tourDate,
            'tourName' => $request->tourName,
            'passengers' => $request->passengers,
            'specialRequests' => $request->specialRequests,
            'fecha_solicitud' => now()->toDateTimeString(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent()
        ];

        // Enviar a Google Apps Script
        $result = $this->googleScriptService->sendTourData($tourData);

        if ($result['success']) {
            return response()->json([
                'success' => true,
                'message' => '¡Solicitud de tour enviada correctamente! Te contactaremos pronto.',
                'referencia' => $result['referencia'] ?? null
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Error al enviar la solicitud. Por favor, intenta nuevamente.',
                'error' => $result['error'] ?? 'Error desconocido'
            ], 500);
        }
    }

    public function getTours()
    {
        $tours = $this->googleScriptService->getTours();
        return response()->json($tours);
    }
}