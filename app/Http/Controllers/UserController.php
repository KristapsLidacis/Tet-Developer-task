<?php

namespace App\Http\Controllers;

use App\Repositories\MySQLUserRepository;
use App\Services\ItemsRequestService;
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
        $sqlRepo = new MySQLUserRepository();
        $itemsRequestService = new ItemsRequestService($sqlRepo);
        $items = $itemsRequestService->execute($id)->getItems();
        $user = $this->userService->execute($id);
        session(['user'=> $user]);
        return view('user.user', ['user' => $user, 'items' => $items]);
    }
}
