<?php

namespace App\Http\Controllers;

use App\Services\PurchaseService;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{

    private PurchaseService $purchaseService;

    public function __construct(PurchaseService $purchaseService)
    {
        $this->purchaseService = $purchaseService;
    }

    public function purchase(Request $request)
    {
//        $request->validate([
//            'userId' => 'required',
//            'userName' => 'required',
//            'userEmail' => 'required',
//            'itemId' => 'required',
//            'itemName' => 'required',
//            'itemPrice' => 'required'
//        ]);
        var_dump($_POST);
        return "alert('success)";
        //return redirect('/items');
    }
}
