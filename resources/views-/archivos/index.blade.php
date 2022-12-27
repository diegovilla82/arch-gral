@extends('layouts.app')
@section('content')

<div class="container">
    <div class="col-12 col-sm-12 col-lg-12 mx-auto">
    <div class="d-flex justify-content-between align-items-center py-3">
        <h1 class="display-4">Lista de Archivos</h1>
        <a href="{{ route('archivos.create') }}" class="btn btn-primary" > Crear Archivo</a>
    </div>
     <hr/>
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-striped table-bordered" id="archivos"></table>
            </div>
        </div>
    </div>
</div>


@endsection
@section('javascripts')
<script>
    $(document).ready(function(){
        $('#archivos').DataTable({
            "responsive": true,
            "order": [[ 0, "desc" ]],
            "serverSide" : true,
             "ajax": "{{ url('api/archivos') }}",
             "columns": [
                 {
                     data: 'id',
                      title: 'ID',
                      visible: false
                     },
                 {
                     data: 'nombre_apellido',
                      title: 'Nombre completo'
                    },
                     {
                     data: 'dni',
                      title: 'DNI'
                     },
                     {
                     data: 'exp',
                      title: 'exp',
                      visible: false
                     },
                 {
                     data: null,
                     title: 'Expediente',
                     searchable: false,
                      orderable: false,
                      "render": function ( data, type, full, meta ) {
                      var exp = '';
                          if(data.tipo_doc == null & data.year_doc == null)
                          {
                              exp = data.exp
                              return exp;
                          }

                        exp = data.tipo_doc +'-'+data.exp +'-'+data.year_doc;

                      return exp;
                    }
                 },
                      {
                     data: 'caja',
                      title: 'CAJA'
                     },
                  {
                     data: 'escriturado',
                     title: 'Escriturado',
                      searchable: false,
                      orderable: false,
                 },
                  {
                     data: 'archivado',
                     title: 'Archivado',
                      searchable: false,
                      orderable: false,
                 },
                  {
                    "data": 'id',
                    "title":'Editar',
                     "searchable": false,
                     "orderable": false,
                    "render": function ( data, type, full, meta ) {

                      var str = "{{ URL::to('archivos/ID/edit') }}";
                      var res = str.replace("ID", data);

                      return"<a href='"+res+"' type='buttom' class='btn btn-info btn-sm' width='30px' ><i class='glyphicon glyphicon-edit'></i> Editar</a>";
                    }
                  },
                  {
                    "data": 'id',
                    "title":'Detalle',
                    "searchable": false,
                    "orderable": false,
                    "render": function ( data, type, full, meta ) {

                      var str = "{{ URL::to('archivos/ID') }}";
                      var res = str.replace("ID", data);

                      return"<a href='"+res+"' type='buttom' class='btn btn-success btn-sm' width='30px' ><i class='glyphicon glyphicon-edit'></i> Ver</a>";
                    }
                  }
             ]
        });
    });
</script>
@endsection
