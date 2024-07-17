<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class ClosureDbController extends Controller
{
    public function whereCallback()
    {
        $trans = Transaction::where('name', 'like', '%name%')
                        ->where(function($query) {
                            return $query->whereIn('id', [1,6,7]);
                        })
                        ->get()->toArray();
        dd(33, $trans);
    }
}
