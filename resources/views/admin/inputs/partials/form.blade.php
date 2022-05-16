<div class="form-group">
    {!! Form::label('fecha','Date') !!}    
    {!! Form::date('fecha', null, ['class'=>'form-control']) !!}
    @error('fecha')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
<div class="form-group">
    {!! Form::label('factura','Factura') !!}
    {!! Form::text('factura', null,['class'=>'form-control','placeholder'=>'Enter factura name']) !!}
    @error('factura')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
<div class="form-group">
    {!! Form::label('provider_id','Provider') !!}
    {!! Form::select('provider_id', $providers, null, ['class'=>'form-control']) !!}
    @error('provider_id')
        <span class="text-danger">{{$message}}</span>    
    @enderror
</div>
