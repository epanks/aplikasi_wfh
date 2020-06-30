<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kodeoutput extends Model
{
    protected $table = 'kodeoutput';
    protected $primaryKey = 'kdoutput';
    public $incrementing = false;
    protected $keyType = 'string';

    public function paket()
    {
        return $this->hasMany(Paket::class, 'kdoutput', 'kdoutput');
    }
}
