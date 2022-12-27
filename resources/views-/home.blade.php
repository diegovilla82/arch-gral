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

                            <th>Caja</th>
                            <th>Exp</th>
                            <th>MZ</th>
                            <th>PC</th>

                            <th>Nombre</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($archivos as $archivo)
                            <tr>

                                <td>{{ $archivo->caja}}</td>
                                <td>{{ $archivo->tipo_doc .'-'. $archivo->exp.'-'. $archivo->year_doc}}</td>
                                <td>{{ $archivo->mz}}</td>
                                <td>{{ $archivo->pc}}</td>

                                <td>{{ $archivo->nombre_apellido}}</td>
                                <td> <a type="button" href="{{ route('archivos.edit', $archivo->id) }}" class="btn btn-info" >
                                          Editar</a> </td>
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
