<?php namespace App\Services;
use ArrayAccess;

class Obj implements ArrayAccess
{
    public $container = [
        "amazone"   => 'TrueMe on amazone',
        "youtube"   => 'TrueMe on youtube',
        "tiktok"   => 'TrueMe on tiktok',
        "lazada" => 'TrueMe on lazada',
    ];

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}
