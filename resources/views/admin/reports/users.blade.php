<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report-Users</title>
</head>

<body>
    <div>
        <div class="card">
            <div>
                <h1>Lista de Usuarios</h1>
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
                </div>
            </div>
        </div>
    </div>
</body>

</html>
