<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        dd(44444444, app('services.trueme')->get() ,app());
    }
}
