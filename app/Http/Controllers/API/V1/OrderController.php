<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\OrderRequest;
use App\Services\API\V1\Interfaces\OrderInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderInterface;

    public function __construct(OrderInterface $orderInterface)
    {
        $this->orderInterface = $orderInterface;
    }
    /**
     * @OA\Post(
     *     path="/api/v1/order",
     *     tags={"Order"},
     *     operationId="create order",
     *     description="",
     *     security={ {"Bearer": {} }},
     * @OA\RequestBody(
     *    required=true,
     *    description="",
     *    @OA\JsonContent(
     *       required={"food_id"},
     *      @OA\Property(property="food_id", type="integer"),
     *    ),
     * ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Validate invalid",
     *     )
     * )
     *
     */
    public function store(OrderRequest $request)
    {
        $result = $this->orderInterface->create($request->all());
        return response()->json($result);
    }
}
