<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [];

    public function owner() {
        return $this->hasOne('app/owner', 'owner_id', 'id');
    }
}
