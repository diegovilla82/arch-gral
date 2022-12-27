

    {!! Form::open(['route' => 'home', 'method' => 'GET', 'id' => 'buscar']) !!}
    <div class="row d-flex py-2">
        <div class="col-sm-2">
          <div class="form-group">
              {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'NOMBRE' ]) !!}
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
              {!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'APELLIDO' ]) !!}
          </div>
        </div>

        <div class="col-sm-1">
          <div class="form-group">
               {!! Form::text('manzana', null, ['class' => 'form-control', 'placeholder' => 'MZ'  ]) !!}
          </div>
        </div>
    <div class="col-sm-1">
      <div class="form-group">

          {!! Form::text('parcela', null, ['class' => 'form-control', 'placeholder' => 'PC'  ]) !!}

      </div>
    </div>
  <div class="col-sm-3">
    <div class="form-group">

        {!! Form::select('localidad_id', $localidades , null,  array('class' => 'form-control', 'id' =>'localidad_id', 'placeholder' => 'SELECCIONAR LOCALDIAD' )) !!}

    </div>
  </div>
  <div class="col-md-2">
  <button type="submit" class="btn btn-primary btn-block">
            BUSCAR <i class="glyphicon glyphicon-search"></i>
          </button>
  </div>
  </div>
 {!! Form::close() !!}
