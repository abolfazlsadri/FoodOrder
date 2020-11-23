<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * @OA\Schema(required={"title"})
 */
class Food extends Model
{
    protected $casts = [
        'ingredients' => 'array'
    ];
    public function ingredients()
    {
        return $this->belongsToMany(
            'App\Ingredient'
        );
    }

    /**
     * @OA\Property(type="string")
     */
    protected $title;
    
    /**
     * @OA\Property(type="integer")
     */
    protected $id;
}
