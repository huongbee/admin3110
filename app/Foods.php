<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    public $table = 'foods';

    function pageUrl(){
        return $this->belongsTo('App\PageUrl','id_url','id');
    }

    function foodType(){
        return $this->belongsTo('App\FoodType','id_type','id');
    }
    
    function menu(){
        return $this->belongsToMany(
            'App\Menu',
            'menu_detail',
            'id_food',
            'id_menu'
        );
    }
}

