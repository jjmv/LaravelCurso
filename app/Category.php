<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";  // <- Atributo protegido nombre de tabla

    protected $fillable = ['name'];  // <- Datos que quiero traer.


    //Para establecer relaciones
    public function articles()
    {
      return $this -> hasMany('App\Article');
    }


}
