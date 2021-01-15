<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkm extends Model
{
    protected $table = 'suratkm';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
