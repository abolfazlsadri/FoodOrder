<?php

use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert(
            [
                [
                    "title"=> "Ham",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Cheese",
                    "stock"=> 3,
                    "best-before"=> "2020-12-08",
                    "expires-at"=> "2020-12-13"
                ], [
                    "title"=> "Bread",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Butter",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Bacon",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Eggs",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Mushrooms",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Sausage",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Hotdog Bun",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Ketchup",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Mustard",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Lettuce",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27",
                ], [
                    "title"=> "Tomato",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Cucumber",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Beetroot",
                    "stock"=> 3,
                    "best-before"=> "2020-12-25",
                    "expires-at"=> "2020-12-27"
                ], [
                    "title"=> "Salad Dressing",
                    "stock"=> 3,
                    "best-before"=> "2020-12-06",
                    "expires-at"=> "2020-12-07"
                ]
            ]
        );
    }
}
