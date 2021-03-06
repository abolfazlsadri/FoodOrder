<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Services\API\V1\Interfaces\UserInterface;
use App\Http\Requests\API\V1\UserLoginRequest;
use App\Http\Requests\API\V1\UserRegisterRequest;

class UserController extends Controller
{
    protected $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    /**
     * @OA\Post(
     * path="/api/v1/login",
     * summary="Sign in",
     * description="Login by email, password",
     * operationId="authLogin",
     * tags={"auth"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="admin@app.com"),
     *       @OA\Property(property="password", type="string", format="password", example="134679"),
     *    ),
     * ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function login(UserLoginRequest $request)
    {
        $input = $request->all();
        $result = $this->userInterface->checkUser($input);
        return response()->json($result);
    }

    /**
     * @OA\Post(
     *     path="/api/v1/register",
     *     tags={"user"},
     *     operationId="create user",
     *     description="",
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"name", "email", "password", "c_password"},
     *      @OA\Property(property="name", type="string"),
     *       @OA\Property(property="email", type="string", pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$", format="email", example="admin@app.com"),
     *       @OA\Property(property="password", type="string", format="password", example="134679"),
     *       @OA\Property(property="c_password", type="string", format="password", example="134679"),
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
    public function register(UserRegisterRequest $request)
    {
        $input = $request->all();
        $result = $this->userInterface->createUser($input);
        return response()->json($result);
    }
}
