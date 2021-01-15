<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepindahan extends Model
{
    protected $table = 'kepindahan';
    protected $primaryKey = 'no_pindah';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function penduduk()
    {
        return $this->belongsTo("App\Penduduk", "nik");
    }
}
