<?php
// app/Http/Controllers/AircraftController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptService;

class AircraftController extends Controller
{
    public function submitAircraftRequest(Request $request)
    {
        // 🎯 VERSIÓN DE EMERGENCIA - SIN VALIDACIONES
        \Log::info('🎯 === INICIANDO CONTROLADOR ===');
        
        // Método 1: Todos los datos
        $todosLosDatos = $request->all();
        \Log::info('📦 1. $request->all():', $todosLosDatos);
        
        // Método 2: Solo el nombre
        $nombre = $request->input('name');
        \Log::info('🔍 2. $request->input("name"):', ['name' => $nombre]);
        
        // Método 3: Datos JSON
        $jsonData = $request->json()->all();
        \Log::info('📄 3. $request->json()->all():', $jsonData);
        
        // Método 4: Contenido crudo
        $contenido = $request->getContent();
        \Log::info('📝 4. $request->getContent():', ['content' => $contenido]);

        // 🎯 ENVIAR DIRECTAMENTE A GOOGLE (sin validar)
        if (!empty($todosLosDatos['name'])) {
            $service = new GoogleScriptService();
            $result = $service->sendEmail($todosLosDatos);
            
            \Log::info('📧 RESULTADO GOOGLE:', $result);
            
            return response()->json($result);
        } else {
            \Log::error('❌ NOMBRE VACÍO EN TODOS LOS MÉTODOS');
            return response()->json([
                'success' => false,
                'message' => '❌ EMERGENCIA: Nombre vacío en todos los métodos. Revisar logs.',
                'debug_data' => [
                    'all' => $todosLosDatos,
                    'name_input' => $nombre,
                    'json' => $jsonData,
                    'content' => $contenido
                ]
            ], 422);
        }
    }
}