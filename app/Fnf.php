<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fnf extends Model
{
    protected $table = 'fnf';

    public function paket()
    {
        return $this->hasMany(Fnf::class);
    }
}
