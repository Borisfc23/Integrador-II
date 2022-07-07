@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
    <div class="card">
        <div class="card-header" style="background: #417290;color:#fff">
            <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-plus-circle"></i> Add
                Products to Output</h1>
        </div>
    </div>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-warning" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    @if (session('info-success'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info-success') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {{-- <p>{{ $output_id }}</p> --}}
            {!! Form::open(['route' => 'admin.details.store']) !!}
            <div class="form-group">
                {!! Form::label('producto', 'Name') !!}
                {!! Form::text('producto', null, ['class' => 'form-control', 'placeholder' => 'Enter name', 'id' => 'searchProduct']) !!}
                @error('producto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {!! Form::hidden('output_id', $output_id) !!}
            <div class="form-group">
                {!! Form::label('cantidad', 'Quantity') !!}
                {!! Form::text('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Enter quantity ']) !!}
                @error('cantidad')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {!! Form::submit('Save', ['class' => 'btn btn-primary float-right btn-lg ']) !!}
            <a href="{{ route('admin.outputs.show', ['output' => $output_id]) }}"
                class="btn btn-warning btn-lg float-right mx-3">Back</a>
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
        var tools = ['serruchos', 'martillo', 'sincel'];

        $('#searchProduct').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('search.iproducts') }}",
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            }
        })
    </script>
@stop
