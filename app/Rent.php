<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rents';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
