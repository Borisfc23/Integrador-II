<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Report-Almacen</title>
    <style>
        .contenedor {
            width: 700px;
        }

        .header {
            width: 700px;

        }

        .header-logo {
            margin: 0 auto;
            padding-left: 100px;
        }

        .header-logo img {
            width: 500px;
        }

        .header-info {
            text-align: right;
        }



        .card .titulos {
            text-align: center;
        }

        .table {
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <div class="header">
            <div class="header-logo">
                <img src="https://www.constructorarf.com.pe/images/logo.jpg" alt="">
            </div>
            <div class="header-info">
                <p><b>Encargado: </b>{{ Auth::user()->name }}</p>
                <p><b>Fecha: </b>{{ date('l \t\h\e jS') }}</p>
                <p><b>Hora: </b>{{ date('H:i:s', time()) }}</p>
            </div>
        </div>
        <div class="card">
            <div class="titulos">
                <h1>Reporte del Almacen Constructora RF</h1>
                <h3><u>Lista de Entradas al Almacen</u></h3>
            </div>
            <div>
                <p><b>Fecha de Salida: </b>{{ $output->fecha }}</p>
                <p><b>Codigo de Salida: </b>{{ $output->codigo }}</p>
                <p><b>Encargado receptor: </b>{{ $user->name }} {{ $user->lastname }} - <b>DNI: </b>
                    {{ $user->dni }} </p>
                <p><b>Destino: </b>{{ $output->ubicacion }}</p>
            </div>
            <div>
                <div>
                    <table class="table">
                        <thead style="background-color: #343A40;color:#fff;text-align:center">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>CANTIDAD</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $product->producto }}</td>
                                    <td>{{ $product->cantidad }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <p style="text-align: right"><b>Cantidad de Productos: </b>{{ count($products) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
