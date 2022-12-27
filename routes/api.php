<?php

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Archivo;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('archivos', function(){
    //$data = App\Archivo::latest()->get();
    //return $data;
    // return DataTables::of($data)
    //             ->addColumn('action', function($data){
    //                 $button='<a class="btn btn-primary" href="{{ url("archivos/'.$data->id.') }}">Edit</a>';
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    return datatables()->eloquent(App\Archivo::query())->toJson();
});
Route::get('archivos-filtrados', function(){

    $nombre = (!empty($_GET["nombre"])) ? ("%".$_GET["nombre"]."%") : ('');
    $apellido =(!empty($_GET["apellido"])) ? ("%".$_GET["apellido"]."%") : ('');

    $manzana = (!empty($_GET["manzana"])) ? ($_GET["manzana"]) : ('');
    $parcela = (!empty($_GET["parcela"])) ? ($_GET["parcela"]) : ('');

    $archivosQuery = Archivo::query();

     if($manzana != '' || $parcela != '' || $nombre != '' || $apellido != '')
     {
         $archivosQuery->whereRaw("(archivos.nombre_apellido LIKE '".$nombre."') AND (archivos.nombre_apellido LIKE '".$apellido."') AND ((archivos.mz = '".$manzana."' ) AND (archivos.pc = '". $parcela ."'))");

     }

    return datatables()->of($archivos->toJson())->make(true);
});

Route::get('archivos-filtrados-por-caja', function(){

    $archivosQuery = Archivo::query();

    $caja = (!empty($_GET["caja"])) ? $_GET["caja"] : 'null';

    //if($caja != '')
    //{
    $archivosQuery->whereRaw("(archivos.caja LIKE '".$caja."')");
    //}

    $archivos = $archivosQuery->select('*');

    return datatables()->of($archivos)->make(true);
});
