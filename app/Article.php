<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';  //Tabla con la que trabajará.

    //Campos a ser mostrados
    protected $fillable = ['title','content','category_id','user_id'];

    //Para la relacion con categorias

    public function category()
    {
      return $this -> belongsTo('App\Category');
    }

    public function user()
    {
      return $this -> belongsTo('App\User');
    }

    public function image()
    {
      return $this -> hasMany('App\Image');
    }

    public function tags()
    {
      return $this -> belongsToMany('App\Tag');
    }


}
