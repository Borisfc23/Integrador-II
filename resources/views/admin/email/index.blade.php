@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
    <div class="card mb-3">
        <div class="card-header" style="background: #417290;color:#fff">
            <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-envelope"></i> Estado
                de envio de Correo
                de Contacto</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="alert alert-success mt-2" role="alert">
        <strong><img src="https://img.icons8.com/emoji/48/000000/check-mark-button-emoji.png" /> the request was sent
            successfully!!!</strong>
    </div>
    <div>
        <img src="https://www.serfadu.com/wp-content/uploads/2020/10/Solicitud-enviada-con-exito.png" alt=""
            style="width:1400px">
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@stop
