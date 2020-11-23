<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\V1\FoodCollection;
use App\Services\API\V1\Interfaces\FoodInterface;

class FoodController extends Controller
{
    protected $foodInterface;

    public function __construct(FoodInterface $foodInterface)
    {
        $this->foodInterface = $foodInterface;
    }

    /**
     * @OA\Schema(
     *     schema="foodGet",
     * allOf={
     *    @OA\Schema(
     *       @OA\Property(property="result", type="array", @OA\Items(ref="#/components/schemas/Food")),
     *    )
     * }
     * )
     *
     * @OA\Get(
     * path="/api/v1/menu",
     * description="Get menu",
     * tags={"Food"},
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *    @OA\JsonContent(
     *       @OA\Property(property="data", type="object", ref="#/components/schemas/foodGet")
     *        )
     *     )
     * )
     */
    public function index()
    {
        $result = $this->foodInterface->gets();
        return new FoodCollection($result);
    }
}
