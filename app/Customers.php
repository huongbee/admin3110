<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public $table = 'customers';

    function bills(){
        return $this->hasMany('App\Bills','id_customer','id');
    }
}
