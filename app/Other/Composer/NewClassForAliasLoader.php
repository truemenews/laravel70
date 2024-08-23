<?php
namespace App\Other\Composer;

/**
 * 
 */
class NewClassForAliasLoader
{
    
    function __construct()
    {
        $this->namespace = __NAMESPACE__;
        $this->class = NewClassForAliasLoader::class;
    }
}