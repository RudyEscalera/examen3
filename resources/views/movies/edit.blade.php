@extends('app')
@section('content')
    <h2>Editar Pelicula</h2>
{!! Form::model($movie, ['method'=>'PATCH', 'action' => ['MoviesController@update', $movie->id]]) !!}
<div class="form-group">
{!! Form::label('name','nombre:') !!}
{!! Form::text('nombre',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('name','Descripcion:') !!}
{!! Form::text('descripcion',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Guardar',['class' => 'btn btn-primary form-control']) !!}
{!! Form::close() !!}
</div>
@stop
@endsection