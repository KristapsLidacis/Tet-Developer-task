<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\View\View;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getUserInfo(int $id): view
    {
        $user = $this->userService->execute($id);
        session(['user'=> $user]);
        return view('user.user', ['user' => $user]);
    }
}
