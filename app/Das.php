<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Das extends Model
{
    protected $guarded = [];
    protected $table = 'das';
    protected $primaryKey = 'kddas';
    public $incrementing = false;
    protected $keyType = 'string';

    public function ws()
    {
        return $this->belongsTo(Ws::class, 'kdws', 'kdws');
    }
}
