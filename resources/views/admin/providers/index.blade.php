@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-list"></i> List Provider</h1>        
    </div>   
</div>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('info')}}</strong>
    </div>    
@endif
<div class="card">
    <div class="card-header">        
        <a href="{{ route('admin.providers.create')}}" class="btn btn-primary btn-lg float-right">Add Provider</a>
    </div>
    <div class="card-body">
        <div class="card-body table-responsive-md">
            <table class="table table-hover">
                <thead style="background-color: #343A40;color:#fff;text-align:center">
                    <tr>
                        <th>ID</th>
                        <th>COMPANY</th>
                        <th>IN CHARGE</th>
                        <th>UBICATION</th>
                        <th>PHONE</th>
                        <th colspan="2">ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($providers as $provider)
                        <tr>
                            <td>{{$provider->id}}</td>
                            <td>{{$provider->nombre}}</td>
                            <td>{{$provider->encargado}}</td>
                            <td>{{$provider->ubicacion}}</td>
                            <td>{{$provider->telefono}}</td>
                            <td width="20px">                                
                                <a href="{{ route('admin.providers.edit',$provider) }}" class="btn btn-warning">Editar</a>
                            </td>
                            <td width="20px">
                                <form action="{{route('admin.providers.destroy',$provider)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  
</div>
    
@stop
