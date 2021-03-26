<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class Technician extends Model
{
    use HasFactory;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile_no',
        'whatsapp_no'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        //'two_factor_recovery_codes',
        //'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];


}
