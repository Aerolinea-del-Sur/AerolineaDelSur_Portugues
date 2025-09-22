<!DOCTYPE html>
<html>
<head>
    <title>Escaneo de Puertos</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 60%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f4f4f4; }
        .open { background-color: #c8e6c9; }   /* Verde claro */
        .closed { background-color: #ffcdd2; } /* Rojo claro */
    </style>
</head>
<body>
    <h1>Escaneo de puertos en <strong>{{ $host }}</strong></h1>

    <table>
        <tr>
            <th>Puerto</th>
            <th>Estado</th>
        </tr>
        @foreach($results as $port => $isOpen)
            <tr class="{{ $isOpen ? 'open' : 'closed' }}">
                <td>{{ $port }}</td>
                <td>{{ $isOpen ? 'Abierto ✅' : 'Cerrado ❌' }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
