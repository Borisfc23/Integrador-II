<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba de CoRREO titulos</title>
</head>

<body>
    <h1>{{ $details['title'] }}</h1>
    <p>
        Buenas, tengo una consulta acerca del funcionamiento del sistema, por favor necesito ayuda con el manejo del
        mismo.
    </p>
    <br>
    <p>Gracias, espero y puedas contactarme a la brevedad.</p>
    <p>Att.{{ Auth::user()->name }}</p>
</body>

</html>
