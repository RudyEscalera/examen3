@extends('layout')
@section('content')

{!! Form::open(['url'=>'articles']) !!}
{!! Form::label('title', 'Name:') !!}
{!! Form::text('title') !!}
<br>
{!! Form::label('body', 'Body:') !!}
{!! Form::textarea('body') !!}
<br>
{!! Form::submit('Guardar') !!}
{!! Form::close() !!}

@stop