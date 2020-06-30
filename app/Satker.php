<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'satker';
    protected $primaryKey = 'kdsatker';
    public $incrementing = false;
    protected $keyType = 'string';
    public function balai()
    {
        return $this->belongsTo(Balai::class);
    }

    public function paket()
    {
        return $this->hasMany(Paket::class, 'kdsatker', 'kdsatker');
    }
    public function progres()
    {
        return $this->hasManyThrough(Progres::class, Paket::class, 'kdsatker', 'paket_id', 'kdsatker', 'id');
    }
    public function ppk()
    {
        return $this->hasMany(Ppk::class, 'kdsatker', 'kdsatker');
    }
}
