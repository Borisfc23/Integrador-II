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
                <h3><u>Lista de Usuarios</u></h3>
            </div>
            <div>
                <div>
                    <table class="table">
                        <thead style="background-color: #343A40;color:#fff;text-align:center">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>LASTNAME</th>
                                <th>AGE</th>
                                <th>DNI</th>
                                <th>EMAIL</th>
                                <th>ROLE</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->dni }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @foreach ($user->roles as $role)
                                            <div>
                                                <label>
                                                    {{ $role->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        <p style="text-align: right"><b>Cantidad de Usuarios: </b>{{ count($users) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
