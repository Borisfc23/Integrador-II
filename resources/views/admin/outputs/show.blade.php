@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
    <div class="card">
        <div class="card-header" style="background: #417290;color:#fff">
            <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-eye"></i> details output</h1>
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
                {!! Form::date('fecha', $output->fecha, ['class' => 'form-control', 'disabled ']) !!}
                @error('fecha')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('codigo', 'Codigo') !!}
                {!! Form::text('codigo', $output->codigo, ['class' => 'form-control', 'placeholder' => 'Enter factura name', 'disabled ']) !!}
                @error('codigo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <div class="d-flex col-md-12 px-0">
                    <div class="col-md-4  px-0">
                        {!! Form::label('dni', 'In Charge') !!}
                        {!! Form::text('dni', $user->dni, ['class' => 'form-control col-md-12', 'disabled ']) !!}
                        @error('dni')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 px-2">
                        {!! Form::label('dni', 'Name') !!}
                        {!! Form::text('name', $user->name, ['class' => 'form-control col-md-12', 'disabled ']) !!}
                        @error('dni')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-4 px-0">
                        {!! Form::label('dni', 'Lastname') !!}
                        {!! Form::text('lastname', $user->lastname, ['class' => 'form-control col-md-12', 'disabled ']) !!}
                        @error('dni')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('ubicacion', 'Location') !!}
                {!! Form::text('ubicacion', $output->ubicacion, ['class' => 'form-control', 'disabled ']) !!}
                @error('ubicacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <a href="{{ route('admin.details.create', ['output_id' => $output->id]) }}"
                    class="btn btn-primary btn-lg float-right">Add Product</a>
                <a href="{{ route('admin.outputs.index') }}" class="btn btn-warning btn-lg float-right mx-3">Back</a>
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
                            <th colspan="2">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $product->producto }}</td>
                                <td>{{ $product->cantidad }}</td>
                                <td width="20px">
                                    <a class="btn btn-warning">Editar</a>
                                </td>
                                <td width="20px">
                                    {{-- <form action="{{ route('admin.products.destroy', $product) }}" method="post">
                                        @csrf
                                        @method('delete') --}}
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                    {{-- </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop
