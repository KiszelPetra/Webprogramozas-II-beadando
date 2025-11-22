<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telepules extends Model
{
    public $table = 'telepules';
    public $timestamps = false;

    public function np()
    {
        return $this->belongsTo(Np::class, 'npid');
    }

    public function utak()
    {
        return $this->hasMany(Ut::class, 'telepulesid');
    }
}
