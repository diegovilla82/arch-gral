<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Archivo extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $attributes = [
        'archivado' => 'SI',
        'escriturado' => 'NO',
        //'year_doc' =>  '2020'
    ];


    public function user()
    {
       return $this->belongsTo('App\User');
    }
    public function localidad()
    {
       return $this->belongsTo('App\Localidad');
    }
     //Scope
     public function scopeManzana($query, $manzana)
     {
         if($manzana)
             return $query->where('mz', 'LIKE', "$manzana");
     }

     public function scopeParcela($query, $parcela)
     {
         if($parcela)
             return $query->where('pc', 'LIKE', "$parcela");
     }

     public function scopeLocalidad($query, $localidad)
     {
         if($localidad)
             return $query->where('localidad_id', '=',  $localidad);
     }

     public function scopeNombre($query, $nombre)
     {
         if($nombre)
             return $query->where('nombre_apellido', 'LIKE', "%$nombre%");
     }

     public function scopeApellido($query, $apellido)
     {
         if($apellido)
             return $query->where('nombre_apellido', 'LIKE', "%$apellido%");
     }
}
