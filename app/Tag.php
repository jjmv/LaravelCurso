<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Tabla
    protected $table = "tags";

    //Campos a traer
    protected $fillable = ['name'];


    public function articles()
    {
      return $this -> belongsToMany('Ap\Article')->withTimestamps();
    }


}
