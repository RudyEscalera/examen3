@extends('app')
@section('content')
	<h2>Nombre: {{$movie->nombre}}</h2>
	<h2>Descripcion: {{$movie->descripcion}}</h2>
	<h2>Categoria: {{$movie->category}}</h2>
	<h2>Reviews:</h2>
	@foreach ($movie->reviews as $review)
			{{$review->content}}
			<h2>likes:{{$review->likes->count()}}</h2> 
			<!--like-->
		{!! Form::open(['url'=>'likes']) !!}
		{!! Form::hidden('review_id', $review->id) !!}
		{!! Form::submit('Like',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
		<br>
	@endforeach



		{!! Form::open(['url'=>'reviews']) !!}
		<br>
		{!! Form::label('name','review:') !!}
		{!! Form::text('content', null,['class' => 'form-control']) !!}
		{!! Form::hidden('movie_id', $movie->id) !!}
		<br><br>
		{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}


		<br>
		{!! Form::open(['url'=>'ratings']) !!}
		<br>
		{!! Form::label('name','rating:') !!}
		{!! Form::text('valor',null,['class' => 'form-control']) !!}
		{!! Form::hidden('movie_id', $movie->id) !!}
		<br><br>
		{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
		@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
@stop