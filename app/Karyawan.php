<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';

    protected $guarded = ['show'];
    protected $with = ['App\User'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
