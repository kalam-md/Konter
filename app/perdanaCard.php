<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perdanaCard extends Model
{
    protected $table = 'perdana_cards';

    protected $guarded = ['show'];

    public function provider()
    {
        return $this->belongsTo('App\Provider', 'provider_id');
    }
}
