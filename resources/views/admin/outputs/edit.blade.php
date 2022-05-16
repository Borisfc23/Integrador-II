@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-edit"></i> Edit output</h1>        
    </div>   
</div>
@stop

@section('content')
<div class="card">
    <div class="card-body">        
        {!! Form::model($output,['route'=>['admin.outputs.update',$output],'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('codigo','Codigo') !!}    
            {!! Form::text('codigo', null, ['class'=>'form-control ','readonly']) !!}
            @error('fecha')
                <span class="text-danger">{{$message}}</span>    
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('fecha','Date') !!}    
            {!! Form::date('fecha', null, ['class'=>'form-control']) !!}
            @error('fecha')
                <span class="text-danger">{{$message}}</span>    
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('dni','In Charge DNI') !!}
            {!! Form::text('dni', null,['class'=>'form-control','placeholder'=>'Enter in charge dni','id'=>'searchUser']) !!}
            @error('dni')
                <span class="text-danger">{{$message}}</span>    
            @enderror
        </div>  
        <div class="form-group">
            {!! Form::label('ubicacion','Destination') !!}
            {!! Form::text('ubicacion', null,['class'=>'form-control','placeholder'=>'Enter destination location']) !!}
            @error('ubicacion')
                <span class="text-danger">{{$message}}</span>    
            @enderror
        </div>
        {!! Form::submit("Update", ['class'=>'btn btn-primary float-right btn-lg ']) !!}
        <a href="{{ route('admin.outputs.index') }}" class="btn btn-warning float-right btn-lg mx-2">Back</a>
        {!! Form::close() !!}
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