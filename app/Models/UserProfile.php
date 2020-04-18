<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserProfile extends Model
{
    use Notifiable;

    protected $fillable = [
        'phone',
        'mobile_phone',
        'individual_legal_registration',
        'kind_person',
        'photo',
    ];

    protected $hidden = [
        'id',
        'user_id'
    ];

    protected $casts = [];
}
