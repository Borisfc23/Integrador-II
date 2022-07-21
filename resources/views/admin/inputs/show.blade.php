@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
    <div class="card">
        <div class="card-header" style="background: #417290;color:#fff">
            <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-eye"></i> Details Input</h1>
        </div>
    </div>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                {!! Form::label('fecha', 'Date') !!}
                {!! Form::date('fecha', $input->fecha, ['class' => 'form-control', 'disabled ']) !!}
                @error('fecha')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('factura', 'Factura') !!}
                {!! Form::text('factura', $input->factura, [
                    'class' => 'form-control',
                    'placeholder' => 'Enter factura name',
                    'disabled ',
                ]) !!}
                @error('factura')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('provider_id', 'Provider') !!}
                {!! Form::select('provider_id', $providers, $selected, ['class' => 'form-control', 'disabled ']) !!}
                @error('provider_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <a class="btn btn-danger btn-lg float-left mx-2" href="{{ route('admin.inputs.pdf', $input) }}"><i
                        class="fas fa-file-pdf"></i> Report
                    PDF</a>
            </div>
            <div>
                <a href="{{ route('admin.products.create', ['id' => $input->id]) }}"
                    class="btn btn-primary btn-lg float-right">Add
                    Product</a>
                <a href="{{ route('admin.inputs.index') }}" class="btn btn-warning btn-lg float-right mx-2">Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body table-responsive-md">
                <table class="table table-hover">
                    <thead style="background-color: #343A40;color:#fff;text-align:center">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>CANTIDAD</th>
                            <th>MARCA</th>
                            <th>TIPO</th>
                            <th>PRECIO</th>
                            <th colspan="3">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $product->nombre }}</td>
                                <td>{{ $product->cantidad }}</td>
                                <td>{{ $product->marca }}</td>
                                <td>{{ $product->tipo }}</td>
                                <td>S/{{ $product->precio }}</td>
                                <td width="20px">
                                    <a href="{{ route('admin.products.edit', $product) }}"
                                        class="btn btn-warning">Editar</a>
                                </td>
                                <td width="20px">
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="post">
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
