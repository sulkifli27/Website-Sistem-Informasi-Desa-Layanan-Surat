<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendatang extends Model
{
    protected $table = 'pendatang';
    protected $primaryKey = 'no_datang';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function penduduk()
    {
        return $this->belongsTo("App\Penduduk", "nik");
    }
}
