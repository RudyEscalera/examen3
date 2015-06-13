@extends('app')
@section('estilo')
    <style>
        .setWidth {
            max-width: 900px;
        }
        .concat div { overflow: auto;
            -ms-text-overflow: ellipsis;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: normal;
            width: inherit;
            height: 40px;
            padding-right: 25px;;
        }
    </style>
@endsection

<div class="fondoguest">
</div>
@foreach ($users as $user)
    {{--{{$user->username}}--}}
@endforeach
{{--@stop--}}
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    @if($user->id != Auth::id() && Auth::check())
                        @include('partials.seguir')
                    @endif
                                  
                     <div class="panel-heading"><h1>Bienvenido a la pagina de {{$user->name}}</h1></div>

                    <div class="panel-body">
                        <h3>Cantidad de Post:{{App\User::find($user->id)->posts->count()}}</h3>
                        <h3>Cantidad de Personas que sigue {{App\User::find($user->id)->idols->count()}}</h3>
                       <h2><a href="/sigo/{{$user->id}}" class="btn btn-primary active">Sigo a </a>
                       <h2><a href="/mesiguen/{{$user->id}}" class="btn btn-primary active">Me siguen</a>
                        <div class="form-group">
                            {!! Form::textarea('texto',null, ['class'=>'form-control', 'maxlength'=>140, 'rows'=>2]) !!}
                        </div>
                        <button type="submit" class="btn btn-success">Postear</button>
                        {!! Form::close() !!}
                        <h2>Posts</h2>

                        <table class="table-striped table-hover">
                            <tbody>
                                @foreach(App\User::find($user->id)->posts as $post)
                                    <tr>
                                        <th>{{$post->created_at}}</th>
                                    </tr>
                                    <tr>
                                        <td class="setWidth concat" ><div>{{$post->texto}}</div></td>
                                    </tr>
                                    <tr>
                                        <td>Likes: {{$post->likes->count()}}</td>

                                    </tr>
                                    <tr>
                                        <td>
                                            @if ($post->liked(Auth::user()))
                                        {!! Form::open(array('route' => array('likes.destroy', $post->userLike(Auth::user())->id), 'method' => 'delete')) !!}
                                        <button type="submit" class="btn btn-danger btn-mini">Unlike</button>
                                        {!! Form::close() !!}
                                    @else
                                    {!! Form::open(['url'=>'likes']) !!}
                                    <br>
                                    {!! Form::hidden('post_id',$post->id) !!}
                                    {!! Form::submit('Like',['class' => 'btn btn-primary active']) !!}
                                    {!! Form::close() !!}
                                    @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><hr/></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
