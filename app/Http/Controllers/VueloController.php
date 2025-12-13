<?php

namespace App\Http\Controllers;

use App\Services\GoogleScriptVuelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VueloController extends Controller
{
    protected $googleScriptService;

    public function __construct(GoogleScriptVuelo $googleScriptService)
    {
        $this->googleScriptService = $googleScriptService;
    }

    public function sendFlightRequest(Request $request)
    {
        // 1. Validar los datos del formulario simplificado (solo 3 campos + tipo servicio)
        $validator = Validator::make($request->all(), [
            'tipo_servicio' => 'required|in:vuelos,helicopteros,aeromedico,carga',
            'nombres_apellidos' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:20'
        ], [
            'tipo_servicio.required' => 'El tipo de servicio es obligatorio',
            'nombres_apellidos.required' => 'El nombre y apellido es obligatorio',
            'correo.required' => 'El correo electrónico es obligatorio',
            'correo.email' => 'El correo electrónico debe ser válido',
            'telefono.required' => 'El teléfono es obligatorio'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor revisa los campos del formulario',
                'errors' => $validator->errors()
            ], 422);
        }

        // 2. Preparar datos simplificados para el servicio
        $serviceData = [
            'tipo_servicio' => $request->tipo_servicio,
            'nombres_apellidos' => $request->nombres_apellidos,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'fecha_solicitud' => now()->toDateTimeString(),
            'ip' => $request->ip()
        ];

        // 3. Enviar a Google Apps Script
        $result = $this->googleScriptService->sendFlightData($serviceData);

        if ($result['success']) {
            // Mensaje personalizado según el tipo de servicio
            $mensajes = [
                'vuelos' => '¡Solicitud de vuelo privado recibida! Nos pondremos en contacto pronto.',
                'helicopteros' => '¡Solicitud de helicóptero recibida! Nos pondremos en contacto pronto.',
                'aeromedico' => '¡Solicitud aeromédica recibida! Nos pondremos en contacto pronto.',
                'carga' => '¡Solicitud de servicio de carga recibida! Nos pondremos en contacto pronto.'
            ];

            return response()->json([
                'success' => true,
                'message' => $mensajes[$request->tipo_servicio] ?? '¡Solicitud recibida! Nos pondremos en contacto.'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Error al procesar la solicitud.',
                'error' => $result['error'] ?? 'Desconocido'
            ], 500);
        }
    }
}
