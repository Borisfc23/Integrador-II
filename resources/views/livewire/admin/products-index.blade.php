<div class="card">
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card-header d-flex">
        <div class="col-md-11">
            <h5>Search Tools</h5>
            <input type="text" wire:model="search" class="form-control" placeholder="Enter tool name">
        </div>
        <div class="d-flex align-items-center mt-4 col-md-1">
            <a class="btn btn-danger " href="{{ route('admin.almacen.pdf') }}"><i class="fas fa-file-pdf"></i> Report
                PDF</a>
        </div>
    </div>
    <div class="card-body table-responsive-md">
        <table class="table table-hover">
            <thead style="background-color: #343A40;color:#fff;text-align:center">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CANTIDAD</th>
                    <th>MARCA</th>
                    <th>TIPO</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->stocks[0]->stock }}</td>
                        <td>{{ $product->marca }}</td>
                        <td>{{ $product->tipo }}</td>
                        <td>{{ $product->estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if ($products->count())
        <div class="card-footer pagination justify-content-end">
            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    @else
        <div class="card-body">
            <strong>No exite el producto buscado</strong>
        </div>
    @endif
</div>
