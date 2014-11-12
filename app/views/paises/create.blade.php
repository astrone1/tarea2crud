
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
<li><a href="/users">Todos</a></li>
<li class="active"><a href="/paises/create">Nuevo</a></li>
</ul>
</div>
</div>
</nav>
<div class="panel panel-success">
<div class="panel-heading">
<h4>Nuevo usuario</h4>
</div>
@extends('wellcome')
@section('contenido') 
{{ Form::open(array('url' => 'Paises')) }}
  <p>Nombre pais:</p>
  {{ Form::text('Nombre') }}</br>

  <p>Capital:</p>
  {{ Form::text('Capital') }}</br>

  <p>Habitantes:</p>
  {{ Form::text('Habitantes') }}</br>

  <p>Created:</p>
  {{ Form::text('created_ad') }}</br>

  <p>Updted:</p>
  {{ Form::text('updated_ad') }}</br>

  {{ Form::submit('GUARDAR') }}
{{ Form::close() }}

<form action="/paises">
    <input type="submit" value="VOLVER A PÁGINA PRINCIPAL DE PAIS">
</form>
@stop
</body>
</html>

























