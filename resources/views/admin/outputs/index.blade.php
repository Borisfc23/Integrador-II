@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-list"></i> List Output</h1>        
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
        <a href="{{ route('admin.outputs.create')}}" class="btn btn-primary btn-lg float-right">Add Output</a>
    </div>
    <div class="card-body">
        <div class="card-body table-responsive-md">
            <table class="table table-hover">
                <thead style="background-color: #343A40;color:#fff;text-align:center">
                    <tr>
                        <th>ID</th>
                        <th>CODIGO</th>
                        <th>FECHA</th>                        
                        {{-- <th>IN CHARGE</th>                         --}}
                        <th>LOCATION</th>                        
                        <th colspan="3">ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="text-center">                    
                    @foreach ($outputs as $output)
                        <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>{{$output->codigo}}</td>
                            <td>{{$output->fecha}}</td>
                            {{-- <td>{{$output->user_id}}</td>                             --}}
                            <td>{{$output->ubicacion}}</td>                            
                            <td width="20px">                                                                                                
                                <a href="{{ route('admin.outputs.edit',$output) }}" class="btn btn-warning">Editar</a>
                            </td>                     
                            <td width="20px">                                                                
                                <a href="{{ route('admin.outputs.show',$output) }}" class="btn btn-success">Ver</a>                                
                            </td>                     
                            <td width="20px">
                                <form action="{{route('admin.outputs.destroy',$output)}}" method="post">
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
