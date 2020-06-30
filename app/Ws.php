<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ws extends Model
{

    protected $guarded = [];
    protected $table = 'ws';
    protected $primaryKey = 'kdws';
    public $incrementing = false;
    protected $keyType = 'string';
    // protected $fillable = [
    //     'kdws', 'nmws'
    // ];


    public function das()
    {
        return $this->hasMany(Das::class, 'kdws', 'kdws');
    }
    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class, 'kdws', 'kdws');
    }
}
