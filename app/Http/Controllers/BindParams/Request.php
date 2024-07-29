<?php namespace App\Http\Controllers\BindParams;

class Request
{
    public function __get($name)
    {
        return $this->{$name} = @$this->{$name} ?: 
            (request($name) ?: request()->server(strtoupper($name)));
    }
}
