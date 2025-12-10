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
        // 1. Validar los datos del formulario de vuelo
        $validator = Validator::make($request->all(), [
            'tipo_viaje' => 'required|in:ida_vuelta,solo_ida',
            'desde' => 'required|string|max:100',
            'hacia' => 'required|string|max:100',
            'fecha_ida' => 'required|date',
            'fecha_retorno' => 'nullable|date|after_or_equal:fecha_ida|required_if:tipo_viaje,ida_vuelta',
            'tipo_a' => 'required|string',
            'pasajeros' => 'required|integer|min:1',
            'adultos' => 'required|integer|min:1',
            'jovenes' => 'required|integer|min:0',
            'comentarios' => 'nullable|string|max:1000',
            'nombres_apellidos' => 'required|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'nullable|string|max:20'
        ], [
            'desde.required' => 'El origen es obligatorio',
            'hacia.required' => 'El destino es obligatorio',
            'fecha_ida.required' => 'La fecha de ida es obligatoria',
            'fecha_retorno.after_or_equal' => 'El retorno debe ser igual o posterior a la ida',
            'tipo_a.required' => 'Selecciona un tipo de avión',
            'pasajeros.min' => 'Debe haber al menos 1 pasajero'
        ]);

        $validator->after(function ($v) use ($request) {
            try {
                $ida = \Carbon\Carbon::parse($request->fecha_ida, 'America/Lima');
                $ahora = \Carbon\Carbon::now('America/Lima')->subMinutes(1);
                if ($ida->lt($ahora)) {
                    $v->errors()->add('fecha_ida', 'La fecha de ida debe ser posterior al momento actual.');
                }
            } catch (\Exception $e) {
            }
        });

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor revisa los campos del formulario',
                'errors' => $validator->errors()
            ], 422);
        }

        // 2. Preparar datos para el servicio
        $flightData = [
            'tipo_viaje' => $request->tipo_viaje,
            'origen' => $request->desde,
            'destino' => $request->hacia,
            'fecha_ida' => $request->fecha_ida,
            'fecha_retorno' => $request->fecha_retorno,
            'avion' => $request->tipo_a,
            'total_pasajeros' => $request->pasajeros,
            'adultos' => $request->adultos,
            'jovenes' => $request->jovenes,
            'comentarios' => $request->comentarios,
            'nombres_apellidos' => $request->nombres_apellidos,
            'correo' => $request->correo,
            'telefono' => $request->telefono,
            'fecha_solicitud' => now()->toDateTimeString(),
            'ip' => $request->ip()
        ];

        // 3. Enviar a Google Apps Script
        $result = $this->googleScriptService->sendFlightData($flightData);

        if ($result['success']) {
            return response()->json([
                'success' => true,
                'message' => '¡Cotización de vuelo solicitada! Nos pondremos en contacto.'
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
