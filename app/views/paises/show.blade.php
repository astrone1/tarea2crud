<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel CRUD</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<style>
body {
width: 450px;
margin: 50px auto;
}
.badge {
float: right;
}
</style>
</head>
<body>
<h1>CRUD en Laravel </h1>
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">CodeJobs</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="#">Todos</a></li>
<li><a href="#">Nuevo</a></li>
</ul>
</div>
</div>
</nav>
<div class="panel panel-success">
<div class="panel-heading">
<h4>Información del usuario</h4>
</div>
<div class="panel-body">

@extends('wellcome')
@section('contenido')
<h2>Nombre del País{{$pais->nombre}} </h2>
<p>id del país: {{$país->id}} </p>
<p>Capital del país: {{$pais->Capital}} </p>
<p>Habitantes del país: {{$pais->Habitantes}} </p>
<p>Created: {{$pais->created_ad}} </p>
<p>Update: {{$pais->updated_ad}} </p>
</br>


<form action="/paises/{{$pais->id}}/edit">
    <input type="submit" value="EDITAR PAIS">
</form>

<form action="/paises">
    <input type="submit" value="PÁGINA INICIAL DE PAISES">
</form>

{{ Form::open(array('url'=>'pais/'.$pais->id, 'method'=>'delete'))}}
{{ Form::submit('ELIMINAR PAIS')}}
{{ Form::close()}}

@stop

<a href="/paises" class="btn btn-default">Regresar</a>
</div>
</div>
</body>
</html>
