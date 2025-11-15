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
        return view('turismo'); // tu archivo turismo.blade.php
    }

    public function sendTourRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'tourDate' => 'required|date',
            'tourName' => 'required|string',
            'passengers' => 'required|integer|min:1|max:6',
            'specialRequests' => 'nullable|string|max:500'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $tourData = [
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'tourDate' => $request->tourDate,
            'tourName' => $request->tourName,
            'passengers' => $request->passengers,
            'specialRequests' => $request->specialRequests,
            'fecha_solicitud' => now()->toDateTimeString(),
            'ip_address' => $request->ip()
        ];

        $result = $this->googleScriptService->sendTourData($tourData);

        if ($result['success']) {
            return response()->json([
                'success' => true,
                'message' => '¡Solicitud de tour enviada correctamente! Te contactaremos pronto.'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Error al enviar la solicitud. Por favor, intenta nuevamente.'
            ], 500);
        }
    }
}