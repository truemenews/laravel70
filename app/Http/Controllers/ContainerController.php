<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestService;

class ContainerController extends Controller
{
    public function singleton()
    {
        // Step 1, check bindings in container when
        // TestService haven't bind
        //dd('Step1: ContainerController', app());
        app()->singleton(TestService::class, function ($app) {
            return new TestService;
        });

        // Step 2, check bindings in container when
        // TestService haven't bind
        dd('Step2: ContainerController', app());

        $testService1 = app()->make(TestService::class);
        $testService2 = app()->make(TestService::class);

    }

    public function multiObjects()
    {
        $testService1 = app()->make(TestService::class);
        $testService2 = app()->make(TestService::class);
        $testService3 = app()->make(TestService::class);
        $testService4 = app()->make(TestService::class);

        dd('testService2', $testService1, $testService2, $testService3, $testService4);
        //$testService1 = app(TestService::class)->get();
        //$testService2 = app(TestService::class)->get();
    }
}
