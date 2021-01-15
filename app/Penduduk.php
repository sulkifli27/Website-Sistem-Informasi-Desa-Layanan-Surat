<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne("App\User", "", "nik");
    }

    public function kk()
    {
        return $this->belongsTo("App\Kk", "no_kk");
    }
}
