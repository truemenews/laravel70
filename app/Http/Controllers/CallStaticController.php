<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Message;
use User;

class CallStaticController extends Controller
{
    public function testStatic()
    {
        echo 'Controller testStatic'; echo '<br/>';

        Message::testCallStatic();
        User::staticMe();
    }
}
