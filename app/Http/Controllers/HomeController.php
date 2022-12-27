<?php

namespace App\Http\Controllers;
use App\Archivo;
use App\Localidad;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //return $request->all();
        $localidades = Localidad::pluck('nombre', 'id');

            $nombre = $request->get('nombre');
            $apellido = $request->get('apellido');
            $manzana = $request->get('manzana');
            $parcela = $request->get('parcela');
            $localidad = $request->get('localidad_id');

            $archivos = Archivo::nombre($nombre)
                        ->apellido($apellido)
                        ->manzana($manzana)
                        ->parcela($parcela)
                        ->localidad($localidad)
                        ->latest()
                            ->take(2000)
                            //->toSql();
                            ->get();
           // dd($archivos);
           // var_dump($archivos);
            return view('home', compact('localidades', 'archivos'));
        //return view('home');
    }

    public function buscador()
    {
        return view('buscador');
    }

    public function buscadorPorCaja()
    {
        return view('buscadorPorCaja');
    }
}
