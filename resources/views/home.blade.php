@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Hola mundo
            </h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni quis earum modi adipisci voluptatibus id ipsam quaerat similique! Officia cumque earum numquam, facere libero placeat error tempora dolores expedita?</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Hola mundo
            </h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni quis earum modi adipisci voluptatibus id ipsam quaerat similique! Officia cumque earum numquam, facere libero placeat error tempora dolores expedita?</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Hola mundo
            </h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni quis earum modi adipisci voluptatibus id ipsam quaerat similique! Officia cumque earum numquam, facere libero placeat error tempora dolores expedita?</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h1 class="card-title">
                Hola mundo
            </h1>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni quis earum modi adipisci voluptatibus id ipsam quaerat similique! Officia cumque earum numquam, facere libero placeat error tempora dolores expedita?</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        Swal.fire({
            title: "Bienvenido!",
            text: "al Sistema de Seguimiento de atenciones",
            icon: "success"
        });
    </script>
@stop