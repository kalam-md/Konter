<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{
    protected $table = 'sellings';

    protected $guarded = ['show'];

    public function voucher()
    {
        return $this->hasMany('App\Voucher', 'voucher_id');
    }

    public function perdana()
    {
        return $this->hasMany('App\perdanaCard', 'perdana_id');
    }

    public function karyawan()
    {
        return $this->hasMany('App\Karyawan', 'karyawan_id');
    }

    public function aksesoris()
    {
        return $this->hasMany('App\Aksesoris', 'aksesoris_id');
    }
}
