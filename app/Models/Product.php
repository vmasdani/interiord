<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $name
 * @property string|null $type
 * @property float|null $price_per_m2
 * @property string|null $t1
 * @property string|null $t23
 * @property string|null $1set
 * @property string|null $top
 * @property string|null $meja
 * @property string|null $fin
 * @property float|null $price
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product where1set($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMeja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePricePerM2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereT1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereT23($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @property string|null $one_set
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOneSet($value)
 * @property int|null $sequence
 * @property int|null $rating
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSequence($value)
 * @property int|null $bestseller_order
 * @property int|null $recommended_order
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBestsellerOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereRecommendedOrder($value)
 * @mixin \Eloquent
 */
class Product extends Model
{

    protected $fillable = [
        'id',
        'name',
        'type',
        'price_per_m2',
        't1',
        't23',
        'top',
        'meja',
        'fin',
        'price',
        'one_set',
        'bestseller_order',
        'recommended_order'
    ];
}
