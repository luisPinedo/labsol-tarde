@extends('layouts.principal')

@section('contenido')
	<h1>Listado de mis posts</h1>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Titulo</th>
				<th>Contenido</th>
				<th>Activo</th>
			</tr>
		</thead>
		<tbody>
			@foreach($datos as $d)
			<tr>
				<td>{{$d->id}}</td>
				<td>{{$d->titulo}}</td>
				<td>{{$d->contenido}}</td>
				<td>{{ $d->activo ? 'Activo' : 'Inactivo' }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection