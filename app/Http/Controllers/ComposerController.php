<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Other\Composer\NewClassForAliasLoader;

class ComposerController extends Controller
{
    public function load()
    {
        var_dump(777, 'Call App\Other\Composer\NewClassForAliasLoader from');
        var_dump(777111, 'app\Http\Controllers\ComposerController.php');
        $newClass = new NewClassForAliasLoader;

        var_dump(999, $newClass);
        echo 'composer in Controller';
    }
}
