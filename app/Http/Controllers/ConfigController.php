<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function get()
    {
        var_dump(config('app.name'));
    }
}
