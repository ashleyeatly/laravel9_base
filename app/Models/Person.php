<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public function cars(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Car');
    }

    public function nationalities(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
       return $this->belongsToMany('App\Models\Nationality');;
    }
}
