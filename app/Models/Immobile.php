<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Immobile extends Model
{
    protected $fillable = [];
    protected $hidden = [
        'id',
        'user_id'
    ];
    protected $cast = [];

    public function description()
    {
        return $this->hasOne(ImmobileProperty::class);
    }

}
