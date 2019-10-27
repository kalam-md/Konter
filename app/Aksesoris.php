<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aksesoris extends Model
{
    protected $table = 'aksesoris';

    protected $guraded = ['show'];


    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
