<!DOCTYPE html>
<html>
<head>
    <title>Nueva Consulta de Aeronave</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #C9A227; color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 20px; }
        .info-row { margin-bottom: 15px; }
        .label { font-weight: bold; color: #C9A227; }
        .footer { background: #333; color: white; padding: 15px; text-align: center; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nueva Consulta de Aeronave</h2>
        </div>
        
        <div class="content">
            <div class="info-row">
                <span class="label">Nombre:</span> {{ $data['name'] }}
            </div>
            <div class="info-row">
                <span class="label">Email:</span> {{ $data['email'] }}
            </div>
            <div class="info-row">
                <span class="label">Teléfono:</span> {{ $data['phone'] }}
            </div>
            <div class="info-row">
                <span class="label">Aeronave:</span> {{ $data['aircraft'] }}
            </div>
            <div class="info-row">
                <span class="label">Fecha de Salida:</span> {{ $data['departure_date'] }}
            </div>
            @if(isset($data['return_date']) && $data['return_date'])
            <div class="info-row">
                <span class="label">Fecha de Retorno:</span> {{ $data['return_date'] }}
            </div>
            @endif
            <div class="info-row">
                <span class="label">Número de Pasajeros:</span> {{ $data['passengers'] }}
            </div>
            <div class="info-row">
                <span class="label">Ciudad de Salida:</span> {{ $data['departure_city'] }}
            </div>
            <div class="info-row">
                <span class="label">Ciudad de Destino:</span> {{ $data['destination_city'] }}
            </div>
            @if(isset($data['message']) && $data['message'])
            <div class="info-row">
                <span class="label">Mensaje Adicional:</span>
                <p>{{ $data['message'] }}</p>
            </div>
            @endif
        </div>
        
        <div class="footer">
            <p>Esta consulta fue enviada desde el sitio web de Aerolínea del Sur</p>
            <p>Fecha: {{ now()->format('d/m/Y H:i') }}</p>
        </div>
    </div>
</body>
</html>