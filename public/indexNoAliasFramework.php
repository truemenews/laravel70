<?php

/**
 * This function will auto include all php file
 */
function boot()
{
    include 'ClassSameFolder.php';
    include './folder5/subfolder/ClassSameNamespace.php';
}


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
    echo '<br/> + Step2: Register alias: <b>' . $className .'</b>';
    var_dump(getAliases());
    if (isset(getAliases()[$className])) {
        echo '<br/> + Step3: Set alias: <b>' 
                .$className. ' > '. getAliases()[$className] . '</b><br/><br/>';

        class_alias(getAliases()[$className], $className);
        return;
    }
    echo '<br/> + Step3: Can not Set alias: <b>' .$className. '</b><br/><br/>';
}

/**
 * Namespace 1
 */
namespace Folder1\Hello;
class TrueMe
{
    function __construct()
    {
        $this->namespace = __NAMESPACE__;
        $this->trueMe = TrueMe::class;
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
        $this->namespace = __NAMESPACE__;
        $this->process = Process::class;
    }
}

/**
 * Namespace 3
 */
namespace Folder3\Sub;
class Name
{
    protected $first;
    function __construct()
    {
        $this->namespace = __NAMESPACE__;
        $this->process = Name::class;
    }
}


/**
 * Namespace 4
 * + In this namespace is used to test
 * + Namespace 1 && namespace 2
 */
namespace Folder4;

echo '<h1>This is namespace: ' . __NAMESPACE__ .'</h1>';

/**
 * When you use same namespace, you won't need 
 * use "use" keyword to include that class via namespace
 */
boot();

use TrueMe; //call alias //case 1
use Process; //call alias
use ClassDontExist; //call alias
//use ClassSameNamespace;

use Folder3\Sub\Name; //Call class


spl_autoload_register("load", true, true);

echo '<br/>--<span style="font-size: 30px;">Case 1</span>----------------------------------------';
echo '<br/>---- + use alias <b>TrueMe</b>-----------------------------------------------------';
echo '<br/>---- + auto call spl_autoload_register > load()--------------------------';
echo '<br/>--------------------------------------------------------------------------------<br/>';
echo '+ Step1: Call Alias: <b>' . TrueMe::class .'</b>';
$trueMe = new TrueMe;
echo '+ Step4: new class: <b>'. getAliases()[TrueMe::class] .'</b>';
var_dump($trueMe);



echo '<br/><br/><br/>';
echo '<br/>--<span style="font-size: 30px;">Case 2</span>--------------------------------';
echo '<br/>---- + use alias <b>Process</b>-----------------------------------------------------';
echo '<br/>---- + auto call spl_autoload_register > load()--------------------------';
echo '<br/>--------------------------------------------------------------------------------<br/>';
echo '+ Step1: Call Alias: <b>'. Process::class .'</b></br></br>';
$process = new Process;
echo '+ Step4: new class: <b>'. getAliases()[Process::class] .'</b>';
var_dump($process);


echo '<br/><br/><br/>';
echo '<br/>--<span style="font-size: 30px;">Case 3</span>--------------------------------';
echo '<br/>---- + use direct namespace class <b>Process</b>--------------------------------------';
echo '<br/>---- + NOT call spl_autoload_register > load()--------------------------';
echo '<br/>--------------------------------------------------------------------------------<br/>';
echo '+ Step1: New instance from: <b>'. Name::class . '</b></br></br>';
$name = new Name;
echo '+ Step4: dont register alias: <b>'. Name::class .'</b>';
var_dump($name);


echo '<br/><br/><br/>';
echo '<br/>--<span style="font-size: 30px;">Case 4</span>--------------------------------';
echo '<br/>---- + use direct same folder and namespace-----------------------------';
echo '<br/>---- + use direct namespace class <b>ClassSameFolder</b>-----------------------------';
echo '<br/>---- + NOT call spl_autoload_register > load()--------------------------';
echo '<br/>--------------------------------------------------------------------------------<br/>';
echo '+ Step1: New instance from: <b>'. ClassSameFolder::class . '</b></br>';
$classSameFolder = new ClassSameFolder;
echo '+ Step4: dont register alias: <b>'. ClassSameFolder::class .'</b>';
var_dump($classSameFolder);


echo '<br/><br/><br/>';
echo '<br/>--<span style="font-size: 30px;">Case 5</span>--------------------------------';
echo '<br/>---- + use direct same folder and namespace-----------------------------';
echo '<br/>---- + use direct namespace class <b>ClassSameNamespace</b>-------------------------';
echo '<br/>---- + NOT call spl_autoload_register > load()--------------------------';
echo '<br/>--------------------------------------------------------------------------------<br/>';
echo '<br/>========================================</br>';
echo '+ Step1: New instance from: <b>'. ClassSameNamespace::class . '</b></br></br>';
$ClassSameNamespace = new ClassSameNamespace;
echo '+ Step4: dont register alias: <b>'. ClassSameNamespace::class .'</b>';
var_dump($ClassSameNamespace);



echo '<br/><br/><br/>';
echo '<br/>--<span style="font-size: 30px;">Case 6</span>--------------------------------';
echo '<br/>---- + call to namespace: <b>ClassDontExist</b>-------------------------';
echo '<br/>---- + dont find ClassDontExist alias in spl_autoload_register > load()--------------';
echo '<br/>--------------------------------------------------------------------------------<br/>';
echo '<br/>========================================</br>';
echo '+ Step1: New instance from: <b>'. ClassDontExist::class . '</b>';
$classDontExist = new ClassDontExist;
var_dump($classDontExist);
echo '<br/>----------------------------------------';

