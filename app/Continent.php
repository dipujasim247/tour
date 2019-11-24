<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Continent
 *
 * @property int $id
 * @property string $continent_name
 * @property float $starting_price
 * @property string $description
 * @property string $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SubContinent[] $subContinent
 * @property-read int|null $sub_continent_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent whereContinentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent whereStartingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Continent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Continent extends Model
{
    protected $table = 'continent';
    protected $guarded = [];

    public function subcontinent(){
        return $this->hasMany('App\SubContinent');
    }
}
