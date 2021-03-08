<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopifyController extends Controller
{
    public function index()
    {
        $shopifyApi = app('ShopifyAPI');
        $products   = $shopifyApi->call('GET', 'admin/products.json&page=1');

        return view('index', (array) $products);
    }
}
