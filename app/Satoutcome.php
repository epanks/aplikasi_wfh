<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satoutcome extends Model
{
    protected $table = 'satoutcome';

    public function paket()
    {
        return $this->hasMany(Paket::class);
    }
}
