<?php

namespace App\Http\Controllers;

use App\Services\GoogleScriptVuelos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VuelosController extends Controller
{
    protected $googleScriptService;

    public function __construct(GoogleScriptVuelos $googleScriptService)
    {
        $this->googleScriptService = $googleScriptService;
    }

    public function sendFlightRequest(Request $request)
    {
        // 1. Validar los datos
        $validator = Validator::make($request->all(), [
            'tipo_viaje' => 'required|in:ida_vuelta,solo_ida',
            'desde' => 'required|string|max:100',
            'hacia' => 'required|string|max:100',
            'fecha_ida' => 'required|date|after_or_equal:today',
            // La fecha de retorno solo es obligatoria si es ida y vuelta
            'fecha_retorno' => 'nullable|required_if:tipo_viaje,ida_vuelta|date|after_or_equal:fecha_ida',
            'tipo_a' => 'required|string',
            'pasajeros' => 'required|integer|min:1',
            'adultos' => 'required|integer|min:1',
            'jovenes' => 'nullable|integer|min:0',
            'comentarios' => 'nullable|string|max:1000',
        ], [
            'desde.required' => 'El origen es obligatorio.',
            'hacia.required' => 'El destino es obligatorio.',
            'fecha_ida.required' => 'La fecha de ida es obligatoria.',
            'fecha_retorno.required_if' => 'La fecha de retorno es obligatoria para viajes de ida y vuelta.',
            'fecha_retorno.after_or_equal' => 'El retorno no puede ser antes de la ida.',
            'tipo_a.required' => 'Selecciona un tipo de avión.',
            'adultos.min' => 'Debe haber al menos 1 adulto.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor revisa los campos del formulario.',
                'errors' => $validator->errors()
            ], 422);
        }

        // 2. Preparar datos
        $flightData = [
            'tipo_viaje' => $request->tipo_viaje === 'ida_vuelta' ? 'Ida y Vuelta' : 'Solo Ida',
            'desde' => $request->desde,
            'hacia' => $request->hacia,
            'fecha_ida' => $request->fecha_ida,
            'fecha_retorno' => $request->fecha_retorno ?? 'N/A',
            'avion' => $request->tipo_a,
            'total_pasajeros' => $request->pasajeros,
            'detalle_pasajeros' => "Adultos: {$request->adultos}, Jóvenes: {$request->jovenes}",
            'comentarios' => $request->comentarios,
            'fecha_solicitud' => now()->toDateTimeString(),
            'ip' => $request->ip()
        ];

        // 3. Enviar al servicio
        $result = $this->googleScriptService->sendFlightData($flightData);

        if ($result['success'] ?? false) {
            return response()->json([
                'success' => true,
                'message' => '¡Cotización de vuelo enviada con éxito! Nos pondremos en contacto.'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Hubo un error al procesar tu solicitud. Intenta nuevamente.'
            ], 500);
        }
    }
}