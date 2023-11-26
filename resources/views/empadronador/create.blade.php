@extends('adminlte::page')

@section('title', 'Empadronador')

@section('content_header')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Crear registro</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                    <a href="/home">Inicio</a>
                </li>
                <li class="breadcrumb-item">
                <a href="/empadronador">Empadronador</a>
                </li>
                <li class="breadcrumb-item active">
                    Nuevo
                </li>
            </ol>
        </div>
    </div>
</div>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <form class="row g-3" action="/empadronador" method='POST'>
            @csrf
            <div class="col-md-6">
                <label for="" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese sus nombres">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese su DNI">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese su Nro. de celular">
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label">Estado</label>
                <select id="estado" name="estado" class="form-control">
                    <option value="1" selected>Habilitado</option>
                    <option value="0">Deshabilitado</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputState" class="form-label">Responsable</label>
                <select id="responsable" name="responsable" class="form-control">
                    <option value="Marizol Tambraico Santi" selected>Marizol Tambraico Santi</option>
                    <option value="Lucia Moreano Aguirre">Lucia Moreano Aguirre</option>
                </select>
            </div>
            <br><br><br><br>
            <div class="col-md-6">
                <a href="/empadronador" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop