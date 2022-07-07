<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report-Provider</title>

</head>

<body>
    <div>
        <div class="card">
            <div>
                <h1>Lista de Proveedores</h1>
            </div>
            <div>
                <div>
                    <table class="table">
                        <thead style="background-color: #343A40;color:#fff;text-align:center">
                            <tr>
                                <th>ID</th>
                                <th>COMPANY</th>
                                <th>IN CHARGE</th>
                                <th>UBICATION</th>
                                <th>PHONE</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($providers as $provider)
                                <tr>
                                    <td>{{ $provider->id }}</td>
                                    <td>{{ $provider->nombre }}</td>
                                    <td>{{ $provider->encargado }}</td>
                                    <td>{{ $provider->ubicacion }}</td>
                                    <td>{{ $provider->telefono }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
