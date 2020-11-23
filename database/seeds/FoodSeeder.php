<?php

use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert(
            [
                [
                    "title"=> "Ham and Cheese Toastie"
                ],
                [
                    "title"=> "Fry-up"
                ],
                [
                    "title"=> "Salad"
                ],
                [
                    "title"=> "Hotdog"
                ]
            ]
        );
    }
}
