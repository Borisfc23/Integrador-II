@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
    <div class="card">
        <div class="card-header" style="background: #417290;color:#fff">
            <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-list"></i> List Provider</h1>
        </div>
    </div>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    @if (session('errors'))
        <div class="alert alert-danger" role="alert">
            <strong>{{ session('errors') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.providers.create') }}" class="btn btn-primary btn-lg float-right"><i
                    class="fas fa-plus-square"></i> Add
                Provider</a>
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success btn-lg float-right mx-2">
                <i class="fas fa-file-excel"></i> Import
                Excel
            </button>
            <a class="btn btn-danger btn-lg float-right " href="{{ route('admin.providers.pdf') }}"><i
                    class="fas fa-file-pdf"></i> Report
                PDF</a>
        </div>
        <div class="card-body">
            <div class="card-body table-responsive-md">
                <table class="table table-hover">
                    <thead style="background-color: #343A40;color:#fff;text-align:center">
                        <tr>
                            <th>ID</th>
                            <th>COMPANY</th>
                            <th>IN CHARGE</th>
                            <th>UBICATION</th>
                            <th>PHONE</th>
                            <th colspan="2">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($providers as $provider)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $provider->nombre }}</td>
                                <td>{{ $provider->encargado }}</td>
                                <td>{{ $provider->ubicacion }}</td>
                                <td>{{ $provider->telefono }}</td>
                                <td width="20px">
                                    <a href="{{ route('admin.providers.edit', $provider) }}"
                                        class="btn btn-warning">Editar</a>
                                </td>
                                <td width="20px">
                                    <form action="{{ route('admin.providers.destroy', $provider) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3 d-flex justify-content-end ">
                    {!! $providers->links() !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Import Provider-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import providers from excel </h5>
                    <button type="button" class="btn-close  bg-danger" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.providers.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">*Select file provider</label>
                            <input type="file" class="form-control" id="formFileMultiple" name="import_file"
                                accept=".xlsx">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary float-right">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@stop
