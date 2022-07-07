<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report-Almacen</title>
</head>

<body>
    <div>
        <div class="card">
            <div>
                <h1>Lista de Herramientas de Almacen</h1>
            </div>
            <div>
                <div>
                    <table class="table">
                        <thead style="background-color: #343A40;color:#fff;text-align:center">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>CANTIDAD</th>
                                <th>MARCA</th>
                                <th>TIPO</th>
                                <th>ESTADO</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $product->nombre }}</td>
                                    <td>{{ $product->stocks[0]->stock }}</td>
                                    <td>{{ $product->marca }}</td>
                                    <td>{{ $product->tipo }}</td>
                                    <td>{{ $product->estado }}</td>
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
