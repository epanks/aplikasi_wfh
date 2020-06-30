<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airtanah extends Model
{
    protected $table = 'at_table';
    protected $guarded = [];
    protected $primaryKey = 'kodefikasi';
    public $incrementing = false;
    protected $keyType = 'string';
}
