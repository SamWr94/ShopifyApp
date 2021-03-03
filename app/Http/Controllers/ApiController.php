<?php
namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
