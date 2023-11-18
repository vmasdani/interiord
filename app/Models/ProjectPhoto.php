<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\ProjectPhoto
 *
 * @property int $id
 * @property int|null $project_id
 * @property int|null $hidden
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjectPhoto whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProjectPhoto extends Model
{

    protected $fillable = [
        'id',
        'project_id'
    ];
}
