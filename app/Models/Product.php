<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [];
    protected $hidden = [
        'id',
        'user_id'
    ];
    protected $cast = [];
}
