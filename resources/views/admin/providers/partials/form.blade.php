<div class="form-group">
    {!! Form::label('nombre','Company') !!}
    {!! Form::text('nombre', null,['class'=>'form-control','placeholder'=>'Enter company name']) !!}
    @error('nombre')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
<div class="form-group">
    {!! Form::label('encargado','In Charge') !!}
    {!! Form::text('encargado', null,['class'=>'form-control','placeholder'=>'Enter in charge name']) !!}
    @error('encargado')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
<div class="form-group">
    {!! Form::label('ubicacion','Ubication') !!}
    {!! Form::text('ubicacion', null,['class'=>'form-control','placeholder'=>'Enter street address']) !!}
    @error('ubicacion')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
<div class="form-group">
    {!! Form::label('telefono','Telephone') !!}
    {!! Form::text('telefono', null,['class'=>'form-control','placeholder'=>'Enter number phone']) !!}
    @error('telefono')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>