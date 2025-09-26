<?php

namespace App\Http\Controllers;

use App\Services\Email\Email;
use App\Services\Email\PHPMailerMessage;
use App\Services\Email\SwiftMailerMessage;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function enviarEmail(Request $request)
    {
        try {
            $email = new Email();
            
            $resultado = $email->setTo($request->email)
                              ->setSubject($request->asunto)
                              ->setBody($request->mensaje)
                              ->send();

            return response()->json(['mensaje' => 'Correo enviado exitosamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function enviarPHPMailer()
    {
        try {
            $mailer = new PHPMailerMessage();
            $mensaje = $mailer->create();
            
            return response()->json(['mensaje' => 'Mensaje creado exitosamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function enviarSwift(Request $request)
    {
        try {
            $swift = new SwiftMailerMessage();
            $swift->to($request->email)
                  ->subject($request->asunto)
                  ->body($request->mensaje)
                  ->send();

            return response()->json(['mensaje' => 'Correo enviado exitosamente']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}