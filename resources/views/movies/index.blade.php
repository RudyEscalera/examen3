@extends('app')
@section('content')
<a href="/movies/create" class ="btn btn-primary">Nueva Pelicula</a>
	<h1>MOVIES</h1>
	@foreach ($movies as $movie)
		<h2><a href="/movies/{{$movie->id}}">{{$movie->nombre}}</a></h2>
		<div class='form-control'>
		{{$movie->descripcion}}</div>
		 </br>
		{!! Form::open(array('method' => 'DELETE', 'route' => array('movies.destroy', $movie->id))) !!}
			{!! link_to_route('movies.edit', 'editar', $movie->id, array('class' => 'btn btn-primary')) !!}
           	{!! Form::submit('Borrar', array('class' => 'btn btn-danger')) !!}
        {!! Form::close() !!}
	@endforeach
@stop