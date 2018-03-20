<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    public $table = 'bills';

    function customers(){
        return $this->belongsTo('App\Customers','id_customer','id');
    }
}
