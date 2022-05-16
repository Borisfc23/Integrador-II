@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-list"></i> List Roles</h1>        
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
        <a href="{{route('admin.roles.create')}}" class="btn btn-primary btn-lg float-right">Add Role</a>
    </div>
    <div class="card-body">
        <div class="card-body table-responsive-md">
            <table class="table table-hover">
                <thead style="background-color: #343A40;color:#fff;text-align:center">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th colspan="2">ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="20px">                                
                                <a href="{{route('admin.roles.edit',$role)}}" class="btn btn-warning">Editar</a>
                            </td>
                            <td width="20px">
                                <form action="{{route('admin.roles.destroy',$role)}}" method="post">
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
