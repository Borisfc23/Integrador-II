@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<h1 class=" mb-4 fs-1 text-uppercase font-weight-bold" style="font-size: 45px">Add Products to Output</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'admin.details.store']) !!}
            <div class="form-group">
                {!! Form::label('nombre','Name') !!}            
                {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Enter name','id'=>'searchProduct']) !!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('cantidad','Quantity') !!}    
                {!! Form::text('cantidad', null,['class'=>'form-control','placeholder'=>'Enter quantity ']) !!}
                @error('cantidad')
                    <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>
        {!! Form::submit("Save", ['class'=>'btn btn-primary float-right btn-lg ']) !!}        
        {!! Form::close() !!}      
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
                url:"{{route('search.iproducts')}}",
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