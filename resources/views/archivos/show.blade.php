@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-12 col-sm-8 col-lg-6 mx-auto">
        <div class="d-flex justify-content-between align-items-center py-3">
                  <h1 class="display-4">Detalle</h1>
                <a href="{{ route('archivos.index') }}" class="btn btn-info" > Volver</a>
            </div>

        <ul class="list-group">
            <li class="list-group shadow-sm mb-3 text-primary ">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold">Expediente N°: {{ $archivo->exp }}</span>
                    <span class="font-weight-bold">Creado: {{ $archivo->created_at->format('d/m/Y') }}</span>
                </div>
            </li>
            <li class="list-group  shadow-sm mb-3 text-primary font-weight-bold">
                <div class="d-flex justify-content-between align-items-center">
                    <span> Titular: {{  $archivo->nombre_apellido }} </span>
                    <span> DNI: {{ $archivo->dni }}</span>
                </div>
            </li>

            <li class="list-group  shadow-sm mb-3 text-primary font-weight-bold">
                <div class="d-flex justify-content-between align-items-center">
                    <span> Caja: {{ $archivo->caja }} </span>
                    <span> Localidad: {{ $archivo->localidad->nombre }}</span>
                </div>

            </li>
            <li class="list-group  shadow-sm mb-3 text-primary font-weight-bold">
                <div class="d-flex justify-content-between align-items-center">
                 <span> Quinta: {{ $archivo->qta }} </span>
                    <span> Manzana: {{ $archivo->mz }} </span>
                    <span> Parcela: {{ $archivo->pc }}</span>
                    <span> U-F: {{ $archivo->uf }}</span>
                </div>

            </li>
             <li class="list-group shadow-sm mb-3">
                <div class="d-flex justify-content-between align-items-center p-3">
                <span><a href="{{ route('archivos.edit', $archivo->id) }}" class="btn btn-info btn-block" > EDITAR </a></span>
                <span>
                    <form class="" method="POST" action="{{ route('archivos.destroy', $archivo->id) }}" >
                                            @csrf

                                        @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-block" > ELIMINAR </button>
                                        </form></span>
                </div>
            </li>
        </ul>



    </div>
</div>



@endsection
