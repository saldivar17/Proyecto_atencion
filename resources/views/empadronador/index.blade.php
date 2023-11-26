@extends('adminlte::page')

@section('title', 'Empadronador')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Empadronadores</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="/home">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Empadronador
                    </li>
                </ol>
            </div>

        </div>
    </div>
@stop

@section('content')

    <a href="empadronador/create" class="btn btn-primary">Nuevo Empadronador</a>
    <br>
    <br>
    <div class="card">
        <div class="card-body">

            <table id="empadronador" class='table table-stripd mt-4'>
                <thead>
                    <tr>
                        <th scope='col'>Nro.</th>
                        <th scope='col'>Nombres</th>
                        <th scope='col'>Apellidos</th>
                        <th scope='col'>Estado</th>
                        <th scope='col'>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empa as $empa)
                    <tr>
                        <td>{{$empa->id}}</td>
                        <td>{{$empa->nombre}}</td>
                        <td>{{$empa->apellidos}}</td>
                        <td>{{$empa->estado}}</td>
                        <td>
                            <form action="{{ route ('empadronador.destroy', $empa->id)}}" method="POST">
                                <a href="/empadronador/{{$empa->id}}/edit" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt" style="color:#ffffff"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-solid fa-trash" style="color:#ffffff"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-resposive">
                    

                </div>
            </div>
        </div>
    </div> -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- para exportar -->
    <!-- <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet"> -->
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- Para exportar -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script> -->

    <script>
        // new DataTable('#empadronador');

        $(document).ready(function(){
            $('#empadronador').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
                },

                // responsive: "true",
                // dom: "Bfrtilp",
                // buttons: [
                //     {
                //         extend: "excelHtml5",
                //         text: "<i class='fas fa-file-excel'></i>",
                //         titleAttr: "Exportar a Excel",
                //         className: "btn btn-success"
                //     },
                //     {
                //         extend: "excelHtml5",
                //         text: "<i class='fas fa-file-pdf'></i>",
                //         titleAttr: "Exportar a PDF",
                //         className: "btn btn-danger"
                //     },
                //     {
                //         extend: "print",
                //         text: "<i class='fa fa-print'></i>",
                //         titleAttr: "Imprimir",
                //         className: "btn btn-info"
                //     },
                // ]
            });
        });

    </script>
@stop