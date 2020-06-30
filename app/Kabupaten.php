<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $guarded = [];
    protected $table = 'kabupaten';
    protected $primaryKey = 'kdkabupaten';
    public $incrementing = false;
    protected $keyType = 'string';

    public function paket()
    {
        return $this->hasMany(Paket::class, 'kdkabupaten', 'kdkabupaten');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'kdprovinsi', 'kdprovinsi');
    }

    public function ws()
    {
        return $this->belongsTo(Ws::class, 'kdws', 'kdws');
    }

    // public function kecamatan()
    // {
    //     return $this->hasMany(Kecamatan::class,'kdkabupaten','kdkabupaten');
    // }
    // public function desa()
    // {
    //     return $this->hasMany(Desa::class,'kdkabupaten','kdkabupaten');
    // }
}
