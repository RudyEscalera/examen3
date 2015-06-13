<h1>Usuarios que me siguen:</h1>
@foreach ($users as $user)
	<h1>user id del que sigo: {{$user->user_id}}</h1>    
@endforeach