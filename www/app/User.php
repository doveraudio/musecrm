<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    public function address(){

        return $this->belongsToMany('App\Address', 'address_user', 'user_id', 'address_id', 'id');
        
    }
    
    public function addresses(){
        
        return $this->address()->get();
        
    }
}
