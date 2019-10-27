<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';

    protected $guarded = ['show'];

    public function voucher()
    {
        return $this->hasMany('App\Voucher');
    }

    public function perdanaCard()
    {
        return $this->hasMany('App\perdanaCard');
    }
}
