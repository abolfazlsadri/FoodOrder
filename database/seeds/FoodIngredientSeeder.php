<?php

use Illuminate\Database\Seeder;

class FoodIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_ingredient')->insert(
            [
                [
                    "food_id"=> 1,
                    "ingredient_id"=> 1
                ],
                [
                    "food_id"=> 1,
                    "ingredient_id"=> 2
                ],
                [
                    "food_id"=> 1,
                    "ingredient_id"=> 3
                ],
                [
                    "food_id"=> 1,
                    "ingredient_id"=> 4
                ],
                [
                    "food_id"=> 2,
                    "ingredient_id"=> 5
                ],
                [
                    "food_id"=> 2,
                    "ingredient_id"=> 6
                ],
                [
                    "food_id"=> 2,
                    "ingredient_id"=> 7
                ],
                [
                    "food_id"=> 2,
                    "ingredient_id"=> 8
                ],
                [
                    "food_id"=> 2,
                    "ingredient_id"=> 3
                ],
                [
                    "food_id"=> 3,
                    "ingredient_id"=> 12
                ],
                [
                    "food_id"=> 3,
                    "ingredient_id"=> 13
                ],
                [
                    "food_id"=> 3,
                    "ingredient_id"=> 14
                ],
                [
                    "food_id"=> 3,
                    "ingredient_id"=> 15
                ],
                [
                    "food_id"=> 3,
                    "ingredient_id"=> 16
                ],
                [
                    "food_id"=> 4,
                    "ingredient_id"=> 8
                ],
                [
                    "food_id"=> 4,
                    "ingredient_id"=> 9
                ],
                [
                    "food_id"=> 4,
                    "ingredient_id"=> 10
                ],
                [
                    "food_id"=> 4,
                    "ingredient_id"=> 11
                ]
            ]
        );
    }
}
