<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $name
 * @property string|null $location
 * @property string|null $material
 * @property string|null $area
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @property int|null $is_hot
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereIsHot($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProjectPhoto> $projectPhotos
 * @property-read int|null $project_photos_count
 * @mixin \Eloquent
 */
class Project extends Model
{

    protected $fillable = [
        'id',
        'name',
        'location',
        'material',
        'area',
        'is_hot'
    ];

    public function projectPhotos()
    {
        return $this->hasMany(ProjectPhoto::class);
    }
}
