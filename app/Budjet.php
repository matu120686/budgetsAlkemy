<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budjet extends Model
{
    protected $fillable = [
        'budget_type', 'concept', 'amount',
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function store($request){      
              

        return self::create($request->all() );
       

    }

    

}
