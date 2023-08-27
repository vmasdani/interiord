<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\Models\AdminSetting
 *
 * @method static \Illuminate\Database\Eloquent\Builder|AdminSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminSetting query()
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $whatsapp_number
 * @property string|null $email
 * @property string|null $tokopedia_link
 * @property string|null $address
 * @property string|null $instagram_link
 * @method static \Illuminate\Database\Eloquent\Builder|Adminsetting whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adminsetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adminsetting whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adminsetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adminsetting whereInstagramLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adminsetting whereTokopediaLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adminsetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Adminsetting whereWhatsappNumber($value)
 * @mixin \Eloquent
 */
class Adminsetting extends Model
{

    protected $fillable = [
        'id',
    ];

}