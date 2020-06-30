<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progres extends Model
{
    protected $table = 'progres';
    protected $guarded = [];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
    // public function balai()
    // {
    //     return $this->belongsTo(Balai::class);
    // }
}
