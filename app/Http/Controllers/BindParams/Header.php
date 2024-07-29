<?php namespace App\Http\Controllers\BindParams;

class Header
{
    public function __get($name)
    {
        return $this->{$name} = @$this->{$name} ?: request()->header($name);
    }
}
