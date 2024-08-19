<?php

/**
 * This is global function 
 * will setting aliases config
 * 
 * @return [array] [aliases]
 */
function getAliases()
{
    return $aliases = [
        'TrueMe' => 'Folder1\Hello\TrueMe',
        'Process' => 'Folder2\Phone\Image\Process'
    ];
}

/**
 * Global function
 * + This function will be loaded automatically when 
 * + call spl_autoload_register
 * 
 * @param  [string] $className [classname]
 * @return avoid
 */
function load($className)
{
    echo '<br/> + Step2: Register alias: ' . $className;
    if (isset(getAliases()[$className])) {
        echo '<br/> + Step3: Set alias: <b>' 
                .$className. ' > '. getAliases()[$className] . '</b><br/>';

        class_alias(getAliases()[$className], $className);
    }
}

/**
 * Namespace 1
 */
namespace Folder1\Hello;
class TrueMe
{
    protected $property;
    function __construct()
    {
        // code...
    }
}

/**
 * Namespace 2
 */
namespace Folder2\Phone\Image;
class Process
{
    protected $range;

    function __construct()
    {
        // code...
    }
}

/**
 * Namespace 3
 */
namespace Folder3\Sub;
class Name
{
    protected $first;
}


/**
 * Namespace 3
 * + In this namespace is used to test
 * + Namespace 1 && namespace 2
 */
namespace Folder4;
use TrueMe; //call alias
use Process; //call alias
use ClassDontExist; //call alias

use Folder3\Sub\Name; //Call class

echo 'Index with no fw alias';

spl_autoload_register("load", true, true);

echo '<br/>----------------------------------------<br/>';
echo '+ Step1: Call Alias: ' . TrueMe::class;
$trueMe = new TrueMe;
var_dump($trueMe);
echo '+ Step4: new class: <b>'. getAliases()[TrueMe::class] .'</b>';


echo '<br/>========================================</br>';
echo '+ Step1: Call Alias: '. Process::class;
$process = new Process;
var_dump($process);
echo '+ Step4: new class: <b>'. getAliases()[Process::class] .'</b>';


echo '<br/>========================================</br>';
echo '+ Step1: New instance from: <b>'. Name::class . '</b>';
$name = new Name;
var_dump($name);
echo '+ Step4: dont register alias: <b>'. Name::class .'</b>';


echo '<br/>========================================</br>';
echo '+ Step1: New instance from: <b>'. ClassDontExist::class . '</b>';
$classDontExist = new ClassDontExist;
var_dump($classDontExist);
echo '<br/>----------------------------------------';

