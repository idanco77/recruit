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
        $nextStages = DB::table('nextstages')->where('from',$status_id)->pluck('to');
        return self::find($nextStages)->all();
    }

    public static function allowed($from,$to){
        $allowed = DB::table('nextstages')->where('from',$from)->where('to',$to)->get();
        if(isset($allowed)) return true;
        return false;
    }

}
