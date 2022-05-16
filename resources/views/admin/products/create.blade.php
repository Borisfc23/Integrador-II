@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-plus-circle"></i> Create Product</h1>        
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
    <div class="card-body">
        {!! Form::open(['route'=>'admin.products.store','autocomplete'=>'on']) !!}
        @include('admin.products.partials.form')
        {!! Form::submit("Save", ['class'=>'btn btn-primary float-right btn-lg ']) !!}     
        <a href="{{ route('admin.inputs.index') }}" class="btn btn-warning float-right btn-lg mx-2">Back</a>   
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