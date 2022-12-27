<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\Localidad;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArchivoRequest;
use App\Http\Requests\SaveArchivoRequest;


class ArchivoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('archivos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $localidades = Localidad::pluck('nombre', 'id');

        return view('archivos.create', compact('localidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArchivoRequest $request)
    {

        //return $request->all();

        Archivo::create($request->all());


        return redirect()->route('archivos.index')->with('info', 'El archivo se guardo con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        return view('archivos.show', compact('archivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivo $archivo)
    {
        $localidades = Localidad::pluck('nombre', 'id');

        return view('archivos.edit', compact('archivo', 'localidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(SaveArchivoRequest $request, Archivo $archivo)
    {
       // return $request();

        $archivo->update($request->all());



        return redirect()->back()->with('info', 'El archivo actualizo con éxito.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        $archivo->delete();

        return redirect()->route('archivos.index')->with('info', 'El archivo fue eliminado.');
    }
}
