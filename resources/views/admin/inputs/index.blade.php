@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-list"></i> List Inputs</h1>        
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
        <a href="{{ route('admin.inputs.create')}}" class="btn btn-primary btn-lg float-right">Add Input</a>
    </div>
    <div class="card-body">
        <div class="card-body table-responsive-md">
            <table class="table table-hover">
                <thead style="background-color: #343A40;color:#fff;text-align:center">
                    <tr>
                        <th>ID</th>
                        <th>DATE</th>
                        <th>FACTURA</th>                        
                        <th colspan="3">ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="text-center">                    
                    @foreach ($inputs as $input)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$input->fecha}}</td>
                            <td>{{$input->factura}}</td>                            
                            <td width="20px">                                                                
                                <a href="{{ route('admin.inputs.edit',$input) }}" class="btn btn-warning">Editar</a>
                            </td>                     
                            <td width="20px">                                                                
                                <a href="{{ route('admin.inputs.show',$input) }}" class="btn btn-success">Ver</a>
                            </td>                     
                            <td width="20px">
                                <form action="{{route('admin.inputs.destroy',$input)}}" method="post">
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
