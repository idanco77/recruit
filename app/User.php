<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','department_id',
    ];

    public function candidates(){
        return $this->hasMany('App\Candidate');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }  
    
    public function roles(){
        return $this->belongsToMany('App\Role','userroles');        
    }    
    
    public function isAdmin(){
        $roles = $this->roles;
        if(!isset($roles)) return false;
        foreach($roles as $role){
            if($role->name === 'admin') return true; 
        } 
        return false; 
    }

    public function isManager(){
        $roles = $this->roles;
        if(!isset($roles)) return false;
        foreach($roles as $role){
            if($role->name === 'manager') return true; 
        } 
        return false; 
    }



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
