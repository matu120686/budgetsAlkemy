<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budjet extends Model
{
    protected $fillable = [
        'budget_type', 'concept', 'amount','date'
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function store($request){      
              

        return self::create($request->all() );      

    }

    public function my_update($request){
        
        
         return self::update($request->all());
       
       
 
    }

    

}
