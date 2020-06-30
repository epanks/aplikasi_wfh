<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sycmyc extends Model
{
    protected $table = 'sycmyc';

    public function paket()
    {
        return $this->hasMany(Sycmyc::class);
    }
}
