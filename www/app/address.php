<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    
    
    protected $fillable = ['street','unit', 'city', 'state', 'zipcode'];
    
    protected $hidden = [];
            
            
            
}
