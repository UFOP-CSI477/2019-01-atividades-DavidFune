<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tran extends Model
{
    protected $fillable=['user_id','tipos_id','data','valor','credito'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }
}
