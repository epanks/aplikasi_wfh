<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';
    protected $primaryKey = 'kddesa';
    public $incrementing = false;
    protected $keyType = 'string';

    public function paket()
    {
        return $this->hasMany(Paket::class, 'kddesa', 'kddesa');
    }
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kdkecamatan', 'kdkecamatan');
    }
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kdkabupaten', 'kdkabupaten');
    }
    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'kdprovinsi', 'kdprovinsi');
    }
}
