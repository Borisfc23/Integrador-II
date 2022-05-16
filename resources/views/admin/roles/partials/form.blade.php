<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter role name']) !!}
</div>
<h2 class="h3">List Permissions</h2>
@foreach ($permissions as $permission)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-2']) !!}
            {{$permission->description}}
        </label>
    </div>
@endforeach