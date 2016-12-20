<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //Tabla
    protected $table = "images";

    //Campos a traer.
    protected $fillable =['name','article_id'];


    public function article()
    {
      return $this->belongsTo('App\Article');
    }
}
