<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageUrl extends Model
{
    public $table = 'page_url';

    function foods(){
        return $this->hasOne(
            'App\Foods',
            'id_url',
            'id'
        );
    }
}
