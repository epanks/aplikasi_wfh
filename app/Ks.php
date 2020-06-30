<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ks extends Model
{
    protected $table = 'ks';

    public function paket()
    {
        return $this->hasMany(Ks::class);
    }
}
