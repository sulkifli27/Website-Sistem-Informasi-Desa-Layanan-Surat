<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    protected $table = 'kematian';
    protected $primaryKey = 'no_kematian';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function penduduk()
    {
        return $this->belongsTo("App\Penduduk", "nik");
    }
}
