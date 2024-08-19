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
    var_dump(111, $className);
    if (isset(getAliases()[$className])) {
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

echo '<br/>----------------------------------------';
$trueMe = new TrueMe;
var_dump($trueMe);
echo '<br/>========================================';

$process = new Process;
var_dump($process);
echo '<br/>========================================';

$name = new Name;
var_dump($name);
echo '<br/>========================================';


$classDontExist = new ClassDontExist;
var_dump($classDontExist);
echo '<br/>----------------------------------------';

