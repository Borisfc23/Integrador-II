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
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Stock</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['route'=>'admin.products.store','autocomplete'=>'on']) !!}
            <div class="form-group">
                {!! Form::label('nombre','Name') !!}                                                    
                {!! Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Enter name','id'=>'searchProduct']) !!}
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('cantidad','Quantity') !!}    
                {!! Form::text('cantidad', null,['class'=>'form-control','placeholder'=>'Enter quantity ']) !!}
                @error('cantidad')
                    <span class="text-danger">{{$message}}</span>    
                @enderror
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {!! Form::submit("Save Changes", ['class'=>'btn btn-primary float-right ']) !!}            
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div> --}}
</div>
