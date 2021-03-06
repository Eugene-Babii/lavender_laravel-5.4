<?php

namespace App;

// use App\User;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rents';

    public function user()
    {
        return $this->belongsTo('App\User');
        // return $this->belongsTo(User::class, 'user_id');
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->sum = 0;
            $model->is_paid = false;
        });
    }

    public static function ispaid()
    {
        return static::where('is_paid', 1)->get();
    }
}
