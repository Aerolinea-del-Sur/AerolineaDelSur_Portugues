<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            // Validar datos
            $validated = $request->validate([
                'firstName' => 'required|string|max:100',
                'lastName' => 'required|string|max:100',
                'email' => 'required|email',
                'phone' => 'nullable|string|max:20',
                'subject' => 'required|string|max:50',
                'message' => 'required|string|max:2000',
            ]);

            // Simular envío (o usar Mail::to(...)->send(...))
            // Mail::raw("Mensaje: {$validated['message']}", function ($m) use ($validated) {
            //     $m->to('tucorreo@gmail.com')->subject('Nuevo mensaje de contacto');
            // });

            // Devuelve JSON
            return response()->json([
                'success' => true,
                'message' => 'Correo enviado correctamente.',
                'data' => $validated
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validación.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error interno del servidor.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
