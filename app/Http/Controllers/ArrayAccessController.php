<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Obj;

class ArrayAccessController extends Controller
{
    public function index(Obj $obj)
    {
        var_dump(3333333, 
            $obj, 
            '+ isset($obj["amazone"]) : ' . isset($obj["amazone"]),
            '+ Value of $obj["amazone"] : ' . $obj['amazone'],
        );

        unset($obj["amazone"]);
        $obj["amazone"] = "This is new value for amazone Trueme";

        $obj[] = 'Append TrueMe 1';
        $obj[] = 'Append TrueMe 2';
        $obj[] = 'Append TrueMe 3';

        dd(
            '+ unset($obj["amazone"]) :',
            '+ and recheck isset($obj["amazone"]) : ' . isset($obj["amazone"]),
            '+ Assign new value for $obj["amazone"] : ' . $obj['amazone'],
            $obj
        );
    }
}
