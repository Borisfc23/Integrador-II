@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-plus-circle"></i> Create Input</h1>        
    </div>   
</div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=>'admin.inputs.store']) !!}
        @include('admin.inputs.partials.form')
        {!! Form::submit("Save", ['class'=>'btn btn-primary float-right btn-lg ']) !!}
        <a href="{{ route('admin.inputs.index') }}" class="btn btn-warning float-right btn-lg mx-2">Cancel</a>
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