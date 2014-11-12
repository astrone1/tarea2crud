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
<h1>CRUD en Laravel 4</h1>
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
<h4>Editar usuario</h4>
</div>
<div class="panel-body">

@extends('wellcome')

@section('contenido')

{{ Form::open(array('url'=>'Paises/'.$pais->id, 'method'=>'put')) }}

<p>Id pais:</p>
	{{ Form::text('id', $pais->id, array('readonly'=>'readonly')) }} </br>
<p>Nombre del pais:</p>
	{{ Form::text('Nombre', $pais->nombre)  }} </br>
<p>Capital pais</p>
	{{ Form::text('Capital', $pais->simbolo )}} </br>
<p>Habitantes pais:</p>
	{{ Form::text('Habitantes', $pais->habitantes) }} </br>
<p>Created:</p>
	{{ Form::text('created_ad', $pais->created) }} </br>
<p>Updated:</p>
	{{ Form::text('updated_ad', $pais->updated)}} </br>
	{{ Form::submit('guardar cambios') }}
{{ Form::close()}}

</br>
<form action="/Paises">
	<input type="submit" value="PÁGINA INICIAL DE PAIS">
</form>


<a href="/paises" class="btn btn-default">Regresar</a>
</form>
</div>
</div>
@if(Session::has('message'))
<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
@endif
</body>
</html>

































