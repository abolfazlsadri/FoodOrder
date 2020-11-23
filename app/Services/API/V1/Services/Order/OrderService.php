<?php 

namespace App\Services\API\V1\Services\Order;

use App\Food;
use App\Services\API\V1\Interfaces\OrderInterface;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Builder;

class OrderService implements OrderInterFace
{
    public function create($request)
    {
        $user = Auth::id();

        $food = Food::where('id', $request['food_id'])
        ->whereHas('ingredients', function (Builder $query) {
            $query->where('stock','>', 0);
        })->first();

        if(!$food) ['message'=> 'the food in gone', 'status'=> 404];

        $ingredientIds= $food->ingredients()->pluck('ingredients.id')->toArray();

        DB::transaction(function() use($request, $user, $ingredientIds){
   
            DB::table('ingredients')->whereIn('id',$ingredientIds)->decrement('stock');
            DB::table('orders')->insert(
                [
                    'food_id'=> $request['food_id'],
                    'user_id'=> $user
                ]
            );
        });
        return ['message'=> 'success', 'status'=> 200];
    }
} 
