<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SubContinent
 *
 * @property int $id
 * @property string $sub_continent_name
 * @property int|null $continent_name
 * @property string $description
 * @property string $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Continent $continent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent whereContinentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent whereSubContinentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubContinent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubContinent extends Model
{
    protected $table = 'sub_continents';
    protected $guarded = [];

    public function continent(){
        return $this->belongsTo('App\Continent')->withDefault();
    }
}
