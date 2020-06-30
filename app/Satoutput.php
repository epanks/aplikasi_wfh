<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satoutput extends Model
{
    protected $table = 'satoutput';

    public function paket()
    {
        return $this->hasMany(Paket::class);
    }
}
