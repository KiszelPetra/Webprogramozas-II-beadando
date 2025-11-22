<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ut extends Model
{
    protected $connection = 'tanosveny';
    public $table = 'ut';
    public $timestamps = false;

    public function telepules()
    {
        return $this->belongsTo(Telepules::class, 'telepulesid');
    }
}
