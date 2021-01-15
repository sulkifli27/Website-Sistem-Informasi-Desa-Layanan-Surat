<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    protected $table = 'kelahiran';
    protected $primaryKey = 'no_kelahiran';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];
}
