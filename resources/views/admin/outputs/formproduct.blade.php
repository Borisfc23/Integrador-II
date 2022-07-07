@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-plus"></i> Add Output</h1>        
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
        <div class="form-group">
            {!! Form::label('id_product','Product') !!}
            {!! Form::text('id_product', null,['class'=>'form-control','placeholder'=>'Enter product name','id'=>'searchProduct']) !!}
            @error('id_product')
                <span class="text-danger">{{$message}}</span>    
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('cantidad','Quantity') !!}
            {!! Form::text('cantidad', null,['class'=>'form-control','placeholder'=>'Enter quantity']) !!}
            @error('cantidad')
                <span class="text-danger">{{$message}}</span>    
            @enderror
        </div>
 
    </div>
    <div class="card-body">
        <div class="card-body table-responsive-md">
            <h3>List Products</h3>
            <table class="table table-hover">
                <thead style="background-color: #343A40;color:#fff;text-align:center">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Cantidad</th>                        
                        <th colspan="3">ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="text-center">                    
                    {{-- @foreach ($inputs as $input)
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
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
  
</div>
    
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">
@stop

@section('js')
<script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
    var tools=['serruchos','martillo','sincel'];

    $('#searchProduct').autocomplete({
        source:function (request,response){
            $.ajax({
                url:"{{route('search.products')}}",
                dataType:'json',
                data:{
                    term:request.term
                },
                success:function(data){
                    response(data);
                }
            });
        }
    })
</script>
@stop