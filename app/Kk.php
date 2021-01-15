<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kk extends Model
{
    protected $table = 'kk';
    protected $primaryKey = 'no_kk';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $guarded = ['no_kk'];

    public function penduduk()
    {
        return $this->hasMany("App\Penduduk", "no_kk");
    }
}
