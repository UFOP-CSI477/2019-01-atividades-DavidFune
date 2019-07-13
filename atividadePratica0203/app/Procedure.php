<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $fillable=["nome","price","user_id"];
    
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function tests()
    {
        return $this->hasMany('App\Test');
    }
}
