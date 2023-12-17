<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\ProductionProcessPhoto
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionProcessPhoto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionProcessPhoto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionProcessPhoto query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionProcessPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionProcessPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductionProcessPhoto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductionProcessPhoto extends Model
{

    protected $fillable = [
        'id',
    ];
}
