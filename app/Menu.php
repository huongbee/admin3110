<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $table = 'menu';

    function foods(){
        return $this->belongsToMany(
            'App\Foods',
            'menu_detail',
            'id_menu',
            'id_food'
        );
    }
}
