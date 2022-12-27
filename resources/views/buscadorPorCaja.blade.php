@extends('layouts.app')
@section('styles')
 <link href=https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center" >

        <div class="col-md-12">

             <h1 class="display-4">Busqueda</h1>
                <hr/>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mx-auto">
                        <div class="card shadow">
                            <div class="card-body">
                                @include('partials.filtro-caja')
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>
                  <div class="row">
                        <div class="col">
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
                                                        <th>Caja</th>
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
    </div>
</div>
 @endsection
 @section('javascripts')

<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js" ></script>
 <script>
 $(document).ready( function () {
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  $('#laravel_datatable').DataTable({
        dom: 'Bfrtip',
        buttons: [
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fa fa-print" > PDF </i>',
                        title: 'Lista de expedientes de la caja',
                        exportOptions: {
                                    'columns': [1,2,3,4,5],// columnas que se imprimen
                                }


                        }
                    ],
         processing: true,
         order: [[0, 'desc']],
         serverSide: true,
         ajax: {
          url: "{{ url('/api/archivos-filtrados-por-caja') }}",
          type: 'GET',
          data: function (d) {
             // debugger;
             d.caja = $('#caja').val();
          }
         },
         columns: [
                  { data: 'id', name: 'id', visible: false },
                  { data: 'nombre_apellido', name: 'nombre_apellido' },
                  { data: 'mz', name: 'mz' },
                  { data: 'pc', name: 'pc' },
                  { data: null,
                    title: 'Expediente',
                    searchable: false,
                    orderable: false,
                    render: function ( data, type, full, meta ) {
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
                  { data: 'caja', name: 'caja' }
               ],
        "lengthMenu": [[ 50, -1], [50, "All"]]
      });
   });

  $('#btnFiterSubmitSearch').click(function(){
      //debugger;
     $('#laravel_datatable').DataTable().draw(true);
  });
</script>
@endsection
