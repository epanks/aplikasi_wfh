<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $primaryKey = 'kdkecamatan';
    public $incrementing = false;
    protected $keyType = 'string';

    public function paket()
    {
        return $this->hasMany(Paket::class, 'kdkecamatan', 'kdkecamatan');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'kdprovinsi', 'kdprovinsi');
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kdkabupaten', 'kdkabupaten');
    }

    // public function desa()
    // {
    //     return $this->hasMany(Desa::class, 'kddesa', 'kddesa');
    // }
}
