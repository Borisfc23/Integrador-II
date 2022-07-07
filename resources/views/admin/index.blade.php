@extends('adminlte::page')

@section('title', 'Dashboard | Administrador')

@section('content_header')
<div class="container-fluid">
  <h1>dashboard</h1>
  <div class="p-2" style="background: #417290;color:#fff">
    <h2>
      <i class="fas fa-signal"></i>
      Estadisticas
    </h2>
  </div>
  <div class="row mt-4">
    <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$products}}</h3>
          <p>Products</p>
        </div>
        <div class="icon">
          <i class="fas fa-tools"></i>  
        </div>
          <a href="{{route('admin.products.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <div class="col-lg-3 col-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$providers}}</h3>
          <p>Providers</p>
        </div>
        <div class="icon">
          <i class="fas fa-store"></i>  
        </div>
        <a href="{{route('admin.providers.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$outputs}}</h3>
          <p>Outputs</p>
        </div>
        <div class="icon">
          <i class="fas fa-door-open"></i>  
        </div>
        <a href="{{route('admin.outputs.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <div class="col-lg-3 col-6">
      <div class="small-box " style="background:#FF795F ">
        <div class="inner">
          <h3>{{$users}}</h3>
          <p>Users</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>  
        </div>
        <a href="{{route('admin.users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
  </div>
  <div class="row mt-5">
    <div class="col-lg-6 col-6">
      <div class="small-box bg-primary">
        <div class="inner">
          <p>Curso</p>
          <h3>Integrador II</h3>
          <p>Integrantes</p>
          <ul>
            <li>Boris Flores Cordova</li>
            <li>Anthony Mayhuasca Salvatierra</li>
          </ul>
          <p>Docente</p>
          <ul>
            <li>J. Valverde</li>
          </ul>
        </div>
        <div class="icon">
          <i class="fas fa-book"></i>  
        </div>
        <a  class="small-box-footer"> -</a>
        </div>
      </div>
      <div class="col-lg-6 col-6">
        <div class="small-box bg-secondary">
          <div class="inner">
            <p>Proyecto</p>        
            <h3>Sistema de Inventario</h3>
            <p>CONSTRUCTORA RF, es una empresa peruana constituida en 1993. Es un equipo de profesionales que elaboran y desarrollan proyectos de Ingeniería y Construcción, acorde a las necesidades de sus clientes, brindando consultoría diferenciada en cada especialidad.
              <p>*Elaborar un Sistema web de inventario para el control de materiales y equipos en una empresa de Construcción basado en la metodología SCRUM que permita a los trabajadores una mejor gestión y manejo de los materiales y equipos de construcción, además el sistema debe ser amigable para todos los usuarios.
              </p>
            </p>
          </div>
          <div class="icon">
            <i class="fas fa-boxes"></i>  
          </div>
            <a  class="small-box-footer"> -</a>
          </div>
        </div>
  </div>
</div>
@stop

@section('content')

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop