@extends('layouts.app')
@section('content')

<div class="container" >
    <div class="col-12 col-sm-10 col-lg-8 mx-auto">
        <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('archivos.update', $archivo->id) }}" >

            <div class="d-flex justify-content-between align-items-center py-3">
               <h1 class="display-4">
              <i class='fas fa-file-alt'></i>
               Editar Archivo</h1>
                <a href="{{ route('archivos.index') }}" class="btn btn-info" >
                <i class='fas fa-arrow-left'></i>
                 Volver</a>
            </div>
            <hr/>
            @method('PATCH')
            @include('archivos.partials._form', ['iconName' => 'edit' , 'btnText' => 'ACTUALIZAR'])
        </form>
    </div>
</div>

@endsection
