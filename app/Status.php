<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Status extends Model
{
    public function candidates()
    {
        return $this->hasMany('App\Candidate');
    } 

    public static function next($status_id){
        $nextstages = DB::table('nextstages')->where('from',$status_id)->pluck('to');
        return self::find($nextstages)->all(); 
    }

}
