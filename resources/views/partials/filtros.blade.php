<div class="row d-flex justify-content-between py-2">
        <div class="col-sm-2">
          <div class="form-group">
              {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'NOMBRE','id'=> 'nombre' ]) !!}
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
              {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'APELLIDO','id'=> 'apellido' ]) !!}
          </div>
        </div>

        <div class="col-sm-1">
          <div class="form-group">
               {!! Form::text('manzana', null, ['class' => 'form-control', 'placeholder' => 'MZ' ,'id'=> 'manzana' ]) !!}
          </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group">

                {!! Form::text('parcela', null, ['class' => 'form-control', 'placeholder' => 'PC' ,'id'=> 'parcela' ]) !!}

            </div>
        </div>
        {{-- <div class="col-sm-3">
            <div class="form-group">

                {!! Form::select('localidad_id', $localidades , null,  array('class' => 'form-control', 'id' =>'localidad_id', 'placeholder' => 'SELECCIONAR LOCALDIAD' )) !!}

            </div>
        </div> --}}
        <div class="col-md-3">
                <button  type="text" id="btnFiterSubmitSearch" class="btn btn-primary btn-block">
                    BUSCAR
                </button>
        </div>
  </div>
