<?php namespace App\Http\Controllers\BindParams;

class Config
{
    public function __get($name)
    {
        return $this->{$name} = @$this->{$name} ?: json_decode(json_encode(config($name)));
    }
}
