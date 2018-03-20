<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    public $table = 'food_type';

    function foods(){
        return $this->hasMany('App\Foods','id_type','id');
    }

    function menuDetail(){
        return $this->hasManyThrough(
            'App\MenuDetail',
            'App\Foods',
            'id_type',
            'id_food',
            'id',
            'id'
        );
    }
}
