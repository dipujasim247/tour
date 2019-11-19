<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table = 'continent';
    protected $guarded = [];

    public function subContinent(){
        return $this->hasMany('App\SubContinent');
    }
}
