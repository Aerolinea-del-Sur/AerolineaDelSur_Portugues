<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleScriptService;

class ContactController extends Controller
{
    protected $googleScriptService;

    public function __construct(GoogleScriptService $googleScriptService)
    {
        $this->googleScriptService = $googleScriptService;
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Enviar datos a Google Apps Script
        $response = $this->googleScriptService->enviarDatos($validated);

        return response()->json($response);
    }
}
