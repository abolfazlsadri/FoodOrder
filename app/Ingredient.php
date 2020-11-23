<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function foods()
    {
        return $this->belongsToMany(
            'App\Food',
            'food_ingredient',
            'ingredient_id', 
            'food_id'
        );
    }
}
