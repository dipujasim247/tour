<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubContinent extends Model
{
    protected $table = 'sub_continents';
    protected $guarded = [];

    public function continent(){
        return $this->belongsTo('App\Continent')->withDefault();
    }
}
