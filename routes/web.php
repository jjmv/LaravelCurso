<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//

Route::get('/', function () {
    return view('welcome');
});

//Todas las rutas especificadas en este Route::group pertenecen al grupo articles
Route::group(['prefix' => 'articles'] , function (){

    //Lo que sigue del arroba es el metodo a ejecutar
    Route::get('view/{id}', [
      'uses' => 'TestController@view',
      'as'   => 'articlesView'
    ]);

});
