{!! Form::open(array('route' =>'idols.store', 'method'=>'post')) !!}
    <div class="form-group">
        {!! Form::hidden('idol_id', $user->id) !!}
        {!! Form::hidden('user_id', Auth::id()) !!}
    </div>
    <button type="submit" class="btn btn-danger btn-sm">Seguir</button>
{!! Form::close() !!}
