<?php 

namespace App\Services\API\V1\Services\Food;

use App\Food;
use App\Services\API\V1\Interfaces\FoodInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

class FoodService implements FoodInterFace
{
    public function gets(): object
    {
        $foods = Food::whereHas('ingredients',function(Builder $query){
            $query->where('stock','>',0)
                  ->where('expires-at','>',Carbon::now());
        })
        ->with('ingredients')
        ->get();

        $foods->map(function($food, $key) use ($foods){ 
            if($food->ingredients->min('best-before') < Carbon::now()){
                return $foods->push($foods->splice($key,1)[0]);
            }        
        })->all();
        
        return $foods;
    }
} 
