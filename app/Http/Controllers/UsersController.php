<?php

namespace App\Http\Controllers;

use App\Services\UsersService;
use Illuminate\View\View;

class UsersController extends Controller
{
    private UsersService $userService;

    public function __construct(UsersService $userService)
    {
        $this->userService = $userService;
    }

    public function index(): view
    {
        return view('user.index', ['users' => $this->userService->execute()->getUsers()]);
    }

}
