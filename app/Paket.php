<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $guarded = [];
    protected $table = 'paket';
    // protected $fillable = [
    //     'nmpaket', 'pagurmp', 'ta', 'trgoutput', 'satoutput_id', 'trgoutcome', 'satoutcome_id', 'ppk_id', 'balai_id', 'kdsatker', 'kdprovinsi', 'kdkabupaten', 'kdkecamatan', 'kddesa', 'kdoutput', 'wilayah_id', 'fnf_id', 'ks_id', 'apbnsbsn_id', 'sycmyc_id', 'slug'
    // ];


    public function satker()
    {
        return $this->belongsTo(Satker::class, 'kdsatker', 'kdsatker');
    }

    public function balai()
    {
        return $this->belongsTo(Balai::class);
    }

    public function kodeoutput()
    {
        return $this->belongsTo(Kodeoutput::class, 'kdoutput', 'kdoutput');
    }

    public function satoutcome()
    {
        return $this->belongsTo(Satoutcome::class);
    }

    public function satoutput()
    {
        return $this->belongsTo(Satoutput::class);
    }

    public function apbnsbsn()
    {
        return $this->belongsTo(Apbnsbsn::class);
    }

    public function fnf()
    {
        return $this->belongsTo(Fnf::class);
    }

    public function ks()
    {
        return $this->belongsTo(Ks::class);
    }

    public function sycmyc()
    {
        return $this->belongsTo(Sycmyc::class);
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'kddesa', 'kddesa');
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kdkabupaten', 'kdkabupaten');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'kdprovinsi', 'kdprovinsi');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kdkecamatan', 'kdkecamatan');
    }

    public function progres()
    {
        return $this->hasOne(Progres::class);
    }

    public function notes()
    {
        return $this->hasMany(Notes::class);
    }
    public function lampiran()
    {
        return $this->hasMany(Lampiran::class);
    }
    public function foto()
    {
        return $this->hasMany(Foto::class);
    }
    public function ppk()
    {
        return $this->belongsTo(Ppk::class);
    }
}
