<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function testCallStatic()
    {
        echo 'Message Model call static function';echo '<br/>';
    }
}
