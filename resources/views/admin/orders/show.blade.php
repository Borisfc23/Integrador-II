@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
    <div class="card">
        <div class="card-header" style="background: #417290;color:#fff">
            <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-eye"></i> Lists of Products
            </h1>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-body table-responsive-md">
                <table class="table table-hover">
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
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.orders.index') }}" class="btn btn-warning btn-lg float-right mx-3">Back</a>
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
