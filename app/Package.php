<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Package
 *
 * @property int $id
 * @property string $package_name
 * @property int|null $continents_id
 * @property int|null $sub_continents_id
 * @property int|null $trip_type_id
 * @property string $tour_duration
 * @property string|null $start_date
 * @property string|null $end_date
 * @property float $tour_price
 * @property string $tour_details
 * @property string|null $tour_price_include
 * @property string|null $tour_price_exclude
 * @property string $hotels
 * @property string|null $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereContinentsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereHotels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package wherePackageName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereSubContinentsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereTourDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereTourDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereTourPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereTourPriceExclude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereTourPriceInclude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereTripTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Package whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Package extends Model
{
    protected $table = 'packages';
    protected $guarded = [];

    public function continent(){
        return $this->belongsTo('App\Continent', 'continents_id')->withDefault();
    }

    public function subcontinent(){
        return $this->belongsTo('App\SubContinent', 'sub_continents_id')->withDefault();
    }

    public function triptype(){
        return $this->belongsTo('App\TripType', 'trip_type_id')->withDefault();
    }

}
