<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$article->title}}</title>
  <!--  Asset se posiciona en la raiz para evitar problemas de routing para los archivos css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/geberal.css')}}">
  </head>
  <body>
    Hola, esta es una prueba de routing.
    <br><br>
    <h1>{{$article -> title}}</h1>
    <hr>
    {{$article -> content}}
    <hr>
    {{$article -> user -> name}} | {{$article -> category -> name}}

    @foreach($article ->tags as $tag)

    {{$tag -> name}}

    @endforeach
  </body>
</html>
