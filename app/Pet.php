<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [];

    public function owner() {
        return $this->belongsTo('app\Owner', 'owner_id', 'id');
    }
}
