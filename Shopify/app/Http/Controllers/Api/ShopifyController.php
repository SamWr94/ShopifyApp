<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ShopifyController extends Controller
{
    /**
     * Display a view of the resource.
     *
     * @return Response|View
     */
    public function index()
    {
        $ShopifyApi = app('ShopifyAPI');
        $Stores = ['StoreTitle1 #1', 'Mega Store', 'PC Store'];

        return view('index', $Stores);
    }
}
