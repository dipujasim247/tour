<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BookingModel
 *
 * @property int $id
 * @property int|null $package_id
 * @property string $customer_name
 * @property string|null $email
 * @property int $phone
 * @property int|null $number_of_adults
 * @property int|null $number_of_child
 * @property string|null $message
 * @property int|null $car_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel whereCarType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel whereNumberOfAdults($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel whereNumberOfChild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BookingModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BookingModel extends Model
{
    protected $table = 'booking';
    protected $guarded = [];
}
