<div class="card">
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card-header d-flex">
        <div class="col-md-11">
            <h5>Buscar Usuario</h5>
            <input type="text" wire:model="search" class="form-control" placeholder="Enter user name">
        </div>
        <div class="d-flex align-items-center mt-4 col-md-1">
            <a class="btn btn-danger " href="{{ route('admin.users.pdf') }}"><i class="fas fa-file-pdf"></i> Report
                PDF</a>
        </div>
    </div>
    <div class="card-body table-responsive-md text-center">
        <table class="table table-hover">
            <thead style="background-color: #343A40;color:#fff;text-align:center">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>LASTNAME</th>
                    <th>AGE</th>
                    <th>DNI</th>
                    <th>EMAIL</th>
                    <th>ROLE</th>
                    <th colspan="2">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->dni }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                <div>
                                    <label>
                                        {{ $role->name }}
                                    </label>
                                </div>
                            @endforeach
                        </td>
                        <td width="20px">
                            <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning">Editar</a>
                        </td>
                        <td width="20px">
                            <form action="{{ route('admin.users.destroy', $user) }}" method="post">
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
    @if ($users->count())
        <div class="card-footer pagination justify-content-end">
            <div class="mt-4">
                {{ $users->links() }}
            </div>
        </div>
    @else
        <div class="card-body">
            <strong>No hay registros</strong>
        </div>
    @endif
</div>
