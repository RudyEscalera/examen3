@extends('app')
@section('content')
<h1>Crear Pelicula</h1>
{!! Form::open(['url'=>'movies']) !!}
<div class="form-group">
{!! Form::label('nombre', 'nombre:') !!}
{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>
{!! Form::label('descripcion', 'critica:') !!}
{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
{!! Form::label('category', 'Category:') !!}
{!! Form::select('animal', array(
    'comedia' => 'Comedia',
    'drama' => 'Drama','terror'=>'Terror')
); !!}
<br>
{!! Form::submit('Guardar', ['class' => 'btn btn-primary form-control']) !!}
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