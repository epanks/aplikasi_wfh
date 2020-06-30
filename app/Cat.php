<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'cat';
    protected $guarded = [];

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kdcat', 'kdcat');
    }
}
