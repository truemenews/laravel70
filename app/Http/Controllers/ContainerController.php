<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestService;

class ContainerController extends Controller
{
    public function singleton()
    {
        dd(app()->make('auth'));
        // Step 1, check bindings in container when
        // TestService haven't bind
        //dd('Step1: ContainerController:container', app());
        app()->singleton(TestService::class, function ($app) {
            return new TestService;
        });

        // Step 2, check bindings in container when
        // TestService haven't bind
        // dd('Step2: ContainerController:bind', app());

        $testService1 = app()->make(TestService::class);
        // Step 3, get TestService from container 
        // because of TestService in step 2, that's only
        //  Closure, this step will relove it
        dd('Step3: ContainerController:resolve', app());

        $testService2 = app()->make(TestService::class);

        dd('Step4: ContainerController:call singleton', app(), $testService2);
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
