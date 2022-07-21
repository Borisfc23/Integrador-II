@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
    <div class="card">
        <div class="card-header" style="background: #417290;color:#fff">
            <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-edit"></i> edit product</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($product, ['route' => ['admin.products.update', $product], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Name') !!}
                {!! Form::text('nombre', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Enter name',
                    'id' => 'searchProduct',
                ]) !!}
                @error('nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('cantidad', 'Quantity') !!}
                {!! Form::text('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Enter quantity ']) !!}
                @error('cantidad')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('marca', 'Brand') !!}
                {!! Form::text('marca', null, ['class' => 'form-control', 'placeholder' => 'Enter brand ']) !!}
                @error('marca')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('tipo', 'Type') !!}
                {!! Form::select(
                    'tipo',
                    ['heramienta' => 'Herramienta', 'maquinaria' => 'Maquinaria', 'insumo' => 'Insumo', 'otros' => 'otros'],
                    null,
                    ['class' => 'form-control'],
                ) !!}
                @error('tipo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('precio', 'Price') !!}
                {!! Form::text('precio', null, ['class' => 'form-control', 'placeholder' => 'Enter price ']) !!}
                @error('precio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('estado', 'Status') !!}
                {!! Form::select('estado', ['optimo' => 'Optimo', 'regular' => 'Regular', 'malo' => 'Mal estado'], null, [
                    'class' => 'form-control',
                ]) !!}
                @error('estado')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('input_id', 'Factura') !!}
                {!! Form::select('input_id', $inputs, $selected, ['class' => 'form-control', 'readonly']) !!}
                @error('input_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Update', ['class' => 'btn btn-primary float-right btn-lg ']) !!}
            <a href="{{ route('admin.inputs.show', $product->input_id) }}"
                class="btn btn-warning float-right btn-lg mx-2">Cancel</a>
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
