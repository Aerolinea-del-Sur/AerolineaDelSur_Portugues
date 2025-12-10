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

    public function sendVuelosRequest(Request $request)
    {
        // 1. Validar los datos específicos del formulario de vuelos
        $validator = Validator::make($request->all(), [
            'tipo_viaje'        => 'required|in:ida_vuelta,solo_ida',
            'nombres_apellidos' => 'required|string|max:150',
            'correo'            => 'required|email|max:100',
            'desde'             => 'required|string|max:100',
            'hacia'             => 'required|string|max:100',
            'fecha_ida'         => 'required|date|after_or_equal:today',
            // Validación condicional: fecha_retorno requerida si es ida_vuelta
            'fecha_retorno'     => 'nullable|date|after:fecha_ida|required_if:tipo_viaje,ida_vuelta',
            'tipo_a'            => 'required|string',
            'pasajeros'         => 'required|integer|min:1',
            'adultos'           => 'required|integer',
            'jovenes'           => 'nullable|integer',
            'comentarios'       => 'nullable|string|max:1000'
        ], [
            'nombres_apellidos.required' => 'El nombre es obligatorio.',
            'desde.required'             => 'El origen es obligatorio.',
            'hacia.required'             => 'El destino es obligatorio.',
            'fecha_retorno.required_if'  => 'La fecha de retorno es obligatoria para viajes de ida y vuelta.',
            'fecha_retorno.after'        => 'El retorno debe ser después de la ida.',
            'tipo_a.required'            => 'Selecciona un tipo de avión.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor revisa los campos del formulario.',
                'errors'  => $validator->errors()
            ], 422);
        }

        // 2. Preparar datos para el Service
        $vueloData = [
            'tipo_viaje'        => $request->tipo_viaje,
            'nombres_apellidos' => $request->nombres_apellidos,
            'correo'            => $request->correo,
            'desde'             => $request->desde,
            'hacia'             => $request->hacia,
            'fecha_ida'         => $request->fecha_ida,
            'fecha_retorno'     => $request->fecha_retorno,
            'tipo_avion'        => $request->tipo_a,
            'total_pasajeros'   => $request->pasajeros,
            'adultos'           => $request->adultos,
            'jovenes'           => $request->jovenes,
            'comentarios'       => $request->comentarios,
            'fecha_solicitud'   => now()->toDateTimeString(),
            'ip_address'        => $request->ip()
        ];

        // 3. Enviar al Service
        $result = $this->googleScriptService->sendFlightData($vueloData);

        if ($result['success']) {
            return response()->json([
                'success' => true,
                'message' => '¡Cotización de vuelo enviada! Nos pondremos en contacto.'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Hubo un problema al enviar la solicitud.',
                'error'   => $result['error'] ?? 'Error desconocido'
            ], 500);
        }
    }
}