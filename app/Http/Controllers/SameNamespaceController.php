<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Logger;

class SameNamespaceController extends Controller
{
    public function monologDefault()
    {
        $defaultLogger = new Logger('info');
        dd($defaultLogger, $GLOBALS['loader']->findFile(Logger::class));die;
    }

    public function monologOverride()
    {
        $overrideLogger = new Logger('info');
        dd($overrideLogger,$overrideLogger->test(), $GLOBALS['loader']->findFile(Logger::class));
    }
}
