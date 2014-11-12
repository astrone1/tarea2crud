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
<li class="active"><a href="/paises">Todos</a></li>
<li><a href="/paises/create">Nuevo</a></li>
</ul>
</div>
</div>
</nav>
<div class="panel panel-success">
<div class="panel-heading">
<h4>Lista de usuarios</h4>
</div>
<div class="panel-body">
<table class="table">
<thead>
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Capital</th>
<th>Habitantes</th>
</tr>
</thead>
<tbody>
@extends('wellcome')

@section('contenido')

<h2>LOS PAISES EXISTENTES</h2>

<ul>@foreach($paises as $pai)
	<li>{{$pai->id}} </li>
	<p> {{$pai->Nombre}} </p>
	<p> {{$pai->Capital}} </p>
	<p> {{$pai->Habitantes}} </p>
	<p> {{$pai->created_at}} </p>
	<p> {{$pai->update_at} </p>

	</br>
	@endforeach
</tbody>
</table>
</div>
</div>
@if(Session::has('message'))
<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
@endif
</body>
</html>








