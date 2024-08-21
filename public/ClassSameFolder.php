<?php namespace Folder4;


/**
 * 
 */
class ClassSameFolder
{
    protected $classSameFolder = [];

    function __construct()
    {
        $this->namespace = __NAMESPACE__;
        $this->classSameFolder = ClassSameFolder::class;
    }
}