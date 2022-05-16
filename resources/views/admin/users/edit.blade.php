@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="card">
    <div class="card-header" style="background: #417290;color:#fff">
        <h1 class=" text-uppercase font-weight-bold" style="font-size: 45px"><i class="fas fa-edit"></i> Edit User</h1>        
    </div>   
</div>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('info')}}</strong>
    </div>    
@endif
    <div class="card">
        <div class="card-body">
            <p class="h5">Name</p>
            <p class="form-control">{{$user->name}}</p>
            <h2 class="h5">List Roles</h2>
            {!! Form::model($user, ['route'=>['admin.users.update',$user],'method'=>'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>                            
                            {!! Form::checkbox('roles[]', $role->id, null, ['class'=>'mr-1']) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Assign role', ['class'=>'btn btn-primary mt-3 btn-lg float-right']) !!}
                <a href="{{ route('admin.users.index') }}" class="btn btn-warning btn-lg float-right mt-3 mx-3">Back</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop