@csrf
<input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
 <div class="form-group">
    <div class="row">
        <div class="col-12 col-sm-4 col-lg-4" >
            <label for="">Nombre y Apellido</label>
            <input type="text"
                    class="form-control  bg-light   @error('nombre_apellido') is-invalid @enderror"
                    id="nombre_apellido"
                    name="nombre_apellido"
                    value="{{ old('nombre_apellido', $archivo->nombre_apellido) }}" >
             @error('nombre_apellido')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            <small id="emailHelp" class="form-text text-muted">Nombre y apellido separados por ",".</small>
        </div>

         <div class="col-12 col-sm-4 col-lg-4" >
            <label for="">DNI</label>
            <input type="text" class="form-control bg-light  @error('dni') is-invalid @enderror" id="dni" name="dni" value="{{ old('dni', $archivo->dni) }}" >
             @error('dni')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            <small id="emailHelp" class="form-text text-muted">Solo números y No debe contener puntos.</small>
        </div>
          <div class="col-12 col-sm-4 col-lg-4" >
            <label for="">Localidad</label>
            {!! Form::select('localidad_id', $localidades , old('localidad_id', $archivo->localidad_id) ,  array('class' => 'form-control bg-light', 'id' =>'localidad_id')) !!}
            {{-- <input type="text" class="form-control bg-light " id="localidad_id" name="localidad_id" value="{{ old('localidad_id', $archivo->localidad_id) }}" > --}}
            <small id="emailHelp" class="form-text text-muted">Solo números y No debe contener puntos.</small>
        </div>
    </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <label for="">N° de Inscripción</label>
                    <input type="text"
                            class="form-control  bg-light   @error('nro_inscripcion') is-invalid @enderror"
                            id="nro_inscripcion"
                            name="nro_inscripcion"
                            value="{{ old('nro_inscripcion', $archivo->nro_inscripcion) }}" >
                    @error('nro_inscripcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <small id="emailHelp" class="form-text text-muted">Nombre y apellido separados por ",".</small>
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
                <label for="">N° de Adjudicación </label>
                <input type="text"
                        class="form-control  bg-light   @error('nro_adjudicacion') is-invalid @enderror"
                        id="nro_adjudicacion"
                        name="nro_adjudicacion"
                        value="{{ old('nro_adjudicacion', $archivo->nro_adjudicacion) }}" >
                @error('nro_adjudicacion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <small id="emailHelp" class="form-text text-muted">Nombre y apellido separados por ",".</small>
            </div>
        </div>
    </div>

    <div class="form-group">
    <div class="row">
        <div class="col-4 col-sm-2 col-lg-2" >
            <label for="">Tipo</label>
             {!! Form::select('tipo_doc', [''=>'','E' =>'E','A'=>'A', 'AE' => 'AE'] , old('tipo_doc', $archivo->tipo_doc) ,  array('class' => 'form-control bg-light', 'id' =>'tipo_doc')) !!}
            <small id="emailHelp" class="form-text text-muted">Número y letras..</small>
        </div>
        <div class="col-4 col-sm-2 col-lg-2" >
            <label for="">Número</label>
            <input type="text" class="form-control bg-light @error('exp') is-invalid @enderror " id="exp" name="exp" value="{{ old('exp', $archivo->exp) }}" >
             @error('exp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            <small id="emailHelp" class="form-text text-muted">Solo letras.</small>
        </div>
        <div class="col-4 col-sm-2 col-lg-2" >
            <label for="">Año</label>
             {!! Form::select('year_doc', array_combine(range(date("Y"), 1970), range(date("Y"), 1970)) , old('year_doc', $archivo->year_doc) ,  array('class' => 'form-control bg-light', 'id' =>'year_doc')) !!}


            <small id="emailHelp" class="form-text text-muted">Número y letras..</small>
        </div>
         <div class="col-12 col-sm-3 col-lg-3" >
            <label for="">Caja</label>
            <input type="text" class="form-control bg-light  @error('caja') is-invalid @enderror" id="caja" name="caja" value="{{ old('caja', $archivo->caja) }}" >
             @error('caja')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
            <small id="emailHelp" class="form-text text-muted">Solo números y No debe contener puntos.</small>
        </div>
         <div class="col-12 col-sm-3 col-lg-3" >
            <label for="">Plan</label>
            <input type="text" class="form-control bg-light " id="plan"  name="plan" value="{{ old('plan', $archivo->plan) }}" >
            <small id="emailHelp" class="form-text text-muted">Plan del programa habitaiconal.</small>
        </div>
    </div>
    </div>
    <div class="form-group">
    <div class="row">

        <div class="col-12 col-sm-6 col-lg-3" >
            <label for="">Quinta</label>
            <input type="text" class="form-control bg-light " id="qta" name="qta"  value="{{ old('qta', $archivo->qta) }}" >
            <small id="emailHelp" class="form-text text-muted">Número y letras..</small>
        </div>
         <div class="col-12 col-sm-6 col-lg-3" >
            <label for="">Manzana</label>
            <input type="text" class="form-control bg-light " id="mz" name="mz"  value="{{ old('mz', $archivo->mz) }}" >
            <small id="emailHelp" class="form-text text-muted">Número y letras.</small>
        </div>
         <div class="col-12 col-sm-6 col-lg-3" >
            <label for="">Parcela</label>
            <input type="text" class="form-control bg-light " id="pc" name="pc"  value="{{ old('pc', $archivo->pc) }}" >
            <small id="emailHelp" class="form-text text-muted">Número y letras..</small>
        </div>
         <div class="col-12 col-sm-6 col-lg-3" >
            <label for="">Unidad funcional</label>
            <input type="text" class="form-control bg-light " id="uf"  name="uf"  value="{{ old('uf', $archivo->uf) }}" >
            <small id="emailHelp" class="form-text text-muted">Número y letras..</small>
        </div>
    </div>
    </div>

<div class="form-group py-3">
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-6 ">
                    <div class="d-flex justify-content-center">
                        {{ Form::label('escriturado', 'Escriturado: ') }}
                        <label class="px-2">
                        {{ Form::radio( 'escriturado', 'SI', old('escriturado', $archivo->escriturado == 'SI' ? true:false))  }} <span>SI</span>
                        </label>
                        <label class="px-2">
                        {{ Form::radio( 'escriturado', 'NO' ,old('escriturado', $archivo->escriturado == 'NO' ? true:false))  }} <span>NO</span>
                        </label>
                    </div>
        </div>
           <div class="col-12 col-sm-6 col-lg-6">
                    <div class="d-flex ">
                     {{ Form::label('archivado', 'Archivado: ') }}
                    <label class="px-2">
                    {{ Form::radio( 'archivado', 'SI', old('archivado', $archivo->archivado == 'SI' ? true:false))  }} <span>SI</span>
                    </label>
                    <label class="px-2">
                    {{ Form::radio( 'archivado', 'NO' ,old('archivado', $archivo->archivado == 'NO' ? true:false))  }} <span>NO</span>
                    </label>
                    </div>
        </div>
    </div>
</div>

  <div class="form-group">
        <div class="row">

            <div class="col-12 col-sm-12 col-lg-12">
                <label for="">Observación</label>
                <textarea class="form-control bg-light " id="observacion" name="observacion" >{{ old('observacion', $archivo->observacion) }}</textarea>
                <small id="emailHelp" class="form-text text-muted">Número y letras..</small>

            </div>

        </div>
  </div>
  <div class="form-group" >
        <div class="row">
            <div class="col" >
                <button class="btn btn-primary btn-lg btn-block" type="submit" >
                <i class='fas fa-{{ $iconName }}'></i>
                 {{ $btnText }}
               </button>
            </div>
        </div>
     </div>


