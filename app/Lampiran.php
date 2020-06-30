<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
    protected $guarded = [];
    protected $table = 'lampiran';

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
    public function notes()
    {
        return $this->belongsTo(Notes::class);
    }
    public function kategori_lampiran()
    {
        return $this->belongsTo(Kategori_lampiran::class);
    }
}
