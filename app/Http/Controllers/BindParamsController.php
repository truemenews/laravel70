<?php namespace App\Http\Controllers;

class BindParamsController extends Controller
{
    private $props = ['request', 'server', 'header', 'config'];

    public function __get($name)
    {
        if (in_array($name, $this->props)) {
            $obj = 'App\\Http\\Controllers\\BindParams\\'.ucfirst($name);
            return $this->{$name} = @$this->{$name}?: new $obj();
        }
    }
}
