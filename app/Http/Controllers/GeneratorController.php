<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneratorController extends Controller
{
    public function get(Request $request)
    {
        $max = $request->get('max');
        $max = $max=='PHP_INT_MAX'? PHP_INT_MAX:((int)$max);

        $ranges = $this->getDataRam($max);

        foreach ($ranges as $range) {
            echo "Dataset {$range} <br>";
        }
    }

    public function getDataRam($max=10)
    {
        $array = [];

        for ($i = 1; $i < $max; $i++) {
            $array[] = $i;
        }

        return $array;
    }


    public function getGenerator(Request $request)
    {
        $max = $request->get('max');
        $max = $max=='PHP_INT_MAX'? PHP_INT_MAX:((int)$max);

        $ranges = $this->getDataGenerator($max);

        foreach ($ranges as $range) {
            echo "Dataset {$range} <br>";
        }
    }

    public function getDataGenerator($max=10)
    {
        for ($i = 1; $i < $max; $i++) {
            yield $i;
        }
    }
}
