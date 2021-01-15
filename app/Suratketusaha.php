<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratketusaha extends Model
{
    protected $table = 'suratketusaha';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
