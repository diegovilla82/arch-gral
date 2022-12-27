@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center" >

        <div class="col-md-12">
             <h1 class="display-4">Busqueda</h1>
                <hr/>
                <div class="card shadow">
                    <div class="card-body">
                        @include('partials.filtros')
                    </div>
                </div>
                <hr/>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-12 py-3">
                                <table class="table table-striped table-bordered" id="laravel_datatable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                             <th>mz</th>
                                            <th>pc</th>
                                            <th>Exp</th>
                                            <th>Creado</th>
                                        </tr>
                                    </thead>
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
 $(document).ready( function () {
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  $('#laravel_datatable').DataTable({
         processing: true,
         order: [[0, 'desc']],
         serverSide: true,
         ajax: {
          url: "{{ url('/api/archivos-filtrados') }}",
          type: 'GET',
          data: function (d) {
             // debugger;
          d.nombre = $('#nombre').val();
          d.apellido = $('#apellido').val();
          d.manzana = $('#manzana').val();
          d.parcela = $('#parcela').val();
          }
         },
         columns: [
                  { data: 'id', name: 'id' },
                  { data: 'nombre_apellido', name: 'nombre_apellido' },
                  { data: 'mz', name: 'mz' },
                  { data: 'pc', name: 'pc' },
                  { data: 'exp', name: 'exp' },
                  { data: 'created_at', name: 'created_at' }
               ]
      });
   });

  $('#btnFiterSubmitSearch').click(function(){
      //debugger;
     $('#laravel_datatable').DataTable().draw(true);
  });
</script>
@endsection
