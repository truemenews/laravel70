<?php namespace Folder4;


/**
 * This class will
 *     + Same folder with index.php
 *     + same Namespace
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