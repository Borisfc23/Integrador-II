@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-list"></i> List Products Warehouse</h1>        
    </div>   
</div>
@stop

@section('content')
    @livewire('admin.products-index',)    
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">
@stop

@section('js')
<script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>
{{-- <script>
    var tools=['serruchos','martillo','sincel'];

    $('#searchProduct').autocomplete({
        source:tools
    })
</script> --}}
@stop