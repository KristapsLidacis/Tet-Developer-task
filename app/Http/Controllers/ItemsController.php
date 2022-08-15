<?php

namespace App\Http\Controllers;

use App\Services\ItemsRequestService;
use Illuminate\View\View;

class ItemsController extends Controller
{
    private ItemsRequestService $itemsRequestService;

    public function __construct(ItemsRequestService $itemsRequestService)
    {

        $this->itemsRequestService = $itemsRequestService;
    }

    public function getItems(): view
    {
        $user = session('user');
        $items = $this->itemsRequestService->execute($user->getId())->getItems();
        return view('user.items', ['user' => $user, 'items' => $items]);
    }


}
