<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'vouchers';

    protected $guarded = ['show'];

    public function provider()
    {
        return $this->belongsTo('App\Provider', 'provider_id');
    }

    // public function selling()
    // {
    //     return $this->belongsTo('App\Selling');
    // }
}
