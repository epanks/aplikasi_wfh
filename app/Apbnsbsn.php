<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apbnsbsn extends Model
{
    protected $table = 'apbnsbsn';

    public function paket()
    {
        return $this->hasMany(Paket::class);
    }
}
