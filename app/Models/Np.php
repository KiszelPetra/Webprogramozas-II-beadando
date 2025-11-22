<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Np extends Model
{
    protected $connection = 'tanosveny';
    public $table = 'np';
    public $timestamps = false;

    public function telepulesek()
    {
        return $this->hasMany(Telepules::class, 'npid');
    }
}
