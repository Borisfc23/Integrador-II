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
<div class="form-group">
    {!! Form::label('marca','Brand') !!}    
    {!! Form::text('marca', null,['class'=>'form-control','placeholder'=>'Enter brand ']) !!}
    @error('marca')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
<div class="form-group">
    {!! Form::label('tipo','Type') !!}    
    {!! Form::select('tipo', ['heramienta'=>'Herramienta','maquinaria'=>'Maquinaria','insumo'=>'Insumo','otros'=>'otros'], null, ['class'=>'form-control']) !!}
    @error('tipo')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
<div class="form-group">
    {!! Form::label('precio','Price') !!}    
    {!! Form::text('precio', null,['class'=>'form-control','placeholder'=>'Enter price ']) !!}
    @error('precio')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
<div class="form-group">
    {!! Form::label('estado','Status') !!}    
    {!! Form::select('estado', ['optimo'=>'Optimo','regular'=>'Regular','malo'=>'Mal estado'], null, ['class'=>'form-control']) !!}
    @error('estado')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
<div class="form-group">
    {!! Form::label('input_id','Factura') !!}
    {!! Form::select('input_id', $inputs, null, ['class'=>'form-control']) !!}
    @error('input_id')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
