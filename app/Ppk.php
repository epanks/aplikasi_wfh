<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppk extends Model
{
    protected $guarded = [];
    protected $table = 'ppk';


    public function paket()
    {
        return $this->hasMany(Paket::class);
    }
    public function balai()
    {
        return $this->belongsTo(Balai::class);
    }
    public function satker()
    {
        return $this->belongsTo(Satker::class, 'kdsatker', 'kdsatker');
    }
}
