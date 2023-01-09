<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * login.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $user = $this->userService->getUserByEmail($request->get('email'));
        $user->tokens()->delete();
        $token = $user->createToken($user->user_name)->plainTextToken;
        return response()->json(['token' => $token, 'user' => $user]);
    }

    /**
     * logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        Session::flush();
        return response()->json(['message' => 'logouted']);
    }
}
