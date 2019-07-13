<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable=['nome'];
    
    public function trans()
    {
        return $this->hasMany('App\Tran');
    }
}
