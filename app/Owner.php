<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [];

    public function pets() {
        return $this->hasMany('app\Pet', 'pet_id', 'id');
    }
}
