<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = ['name','email'];

    public function owner(){
        return $this->belongsTo('App\User','user_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }     

}
