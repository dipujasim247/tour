<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TripType
 *
 * @property int $id
 * @property string $trip_type
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TripType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TripType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TripType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TripType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TripType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TripType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TripType whereTripType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TripType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TripType extends Model
{
    protected $table = 'trip_types';
    protected $guarded = [];
}
