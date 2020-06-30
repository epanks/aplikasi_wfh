<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_lampiran extends Model
{
    protected $table = 'kategori_lampiran';

    public function lampiran()
    {
        return $this->hasMany(Lampiran::class);
    }
    public function notes()
    {
        return $this->hasMany(Notes::class);
    }
}
