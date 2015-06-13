<h1>hola</h1>
{{--el usuario registrado--}}
{{$registrado = App\User::find(Auth::id())->first()}}


$posts_registrado = array()
@foreach($registrado->posts as $post)
    array_push($posts_registrado,{{$post->texto}} )
@endforeach


{{$posts_idolos = array()}}
@foreach($registrado->idols as $idolo)
        {{array_push($posts_idolos,App\Post::where('user_id',$idolo->idol_id)->first()->texto )}}
@endforeach

