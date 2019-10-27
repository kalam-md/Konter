<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $guarded = [];
    protected $with = ['App\User'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
