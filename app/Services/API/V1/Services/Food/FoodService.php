<?php 

namespace App\Services\API\V1\Services\Food;

use App\Food;
use App\Services\API\V1\Interfaces\FoodInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

class FoodService implements FoodInterFace
{
    public function gets(): array
    {
        $foods = Food::whereHas('ingredients',function(Builder $query){
            $query->where('stock','>',0)
                  ->where('expires-at','>',Carbon::now());
        })
        ->with('ingredients')
        ->get()
        ->sortByDesc(function($food){            
           return $food->ingredients->max('best-before');                 
        })->all();
        return $foods;
    }
} 
