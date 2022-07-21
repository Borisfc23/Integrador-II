@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')

    <div class="card">
        <div class="card-header  " style="background: #417290;color:#fff">
            <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-list"></i> My
                Orders({{ Auth::user()->name }})</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="card-body table-responsive-md">
                <table class="table table-hover">
                    <thead style="background-color: #343A40;color:#fff;text-align:center">
                        <tr>
                            <th>ID</th>
                            <th>CODIGO</th>
                            <th>FECHA</th>
                            <th>LOCATION</th>
                            <th colspan="3">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($outputs as $output)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $output->codigo }}</td>
                                <td>{{ $output->fecha }}</td>
                                <td>{{ $output->ubicacion }}</td>
                                <td width="20px">
                                    <a href="{{ route('admin.orders.show', $output) }}" class="btn btn-success">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
