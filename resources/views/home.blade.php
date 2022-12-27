@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" >

        <div class="col-md-12">
             <h1 class="display-4">Busqueda</h1>
                <hr/>
            <div class="card shadow">
            <div class="card-body">
                    @include('partials.busqueda')

                <div class="row">
                <div class="col-12 col-sm-12 col-lg-12 py-3">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre completo</th>
                            <th>DNI</th>
                            <th>Expediente</th>
                             <th>Caja</th>
                            <th>MZ</th>
                            <th>PC</th>
                            <th>Editar</th>
                            <th>Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($archivos as $archivo)
                            <tr>
                                <td>{{ $archivo->nombre_apellido}}</td>
                                <td>{{ $archivo->dni}}</td>
                                <td>{{ $archivo->tipo_doc .'-'. $archivo->exp.'-'. $archivo->year_doc}}</td>
                                <td>{{ $archivo->caja}}</td>
                                <td>{{ $archivo->mz}}</td>
                                <td>{{ $archivo->pc}}</td>
                                <td> <a type="button" href="{{ route('archivos.edit', $archivo->id) }}" class="btn btn-info btn-sm" >
                                        <i class="fas fa-edit"></i>  Editar</a></td>
                                <td> <a type="button" href="{{ route('archivos.show', $archivo->id) }}" class="btn btn-success btn-sm" >
                                        <i class="fas fa-eye"></i>  Ver</a></td>
                            </tr>
                        @endforeach
                    </tbody>

                    </table>
                    </div>
            </div>


        </div>


          </div>
        </div>
    </div>
</div>
@endsection
@section('javascripts')

<script>


$(document).ready(function() {

//
// DataTables initialisation
//
$table = $('#table').DataTable( {
         order: [[0, 'desc']],
         responsive: true

    });
});
</script>

@stop
