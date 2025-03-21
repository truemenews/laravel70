<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ContractCacheController extends Controller
{
    public function index()
    {
        //dd(222222, app()->log, app());
        //dd(222222, app()['logpo'], app());

        var_dump('111. Cache.Controller.get');
        echo '<br/> ----------------';

        Cache::get('trueMe');

        return true;

        Cache::store('file')->put('trueMeFile', 'TrueMe is storing file');
        Cache::put('trueMe', 'Hello, I am TrueMe that"s caching');

        dd(324323,Cache::get('trueMe'), Cache::store('file')->get('trueMeFile'));
    }
}
