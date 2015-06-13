<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Idol extends Model {

    protected $fillable = ['idol_id', 'user_id'];

    public function idols()
    {
        return $this->hasMany('App\Idol');
    }

}
