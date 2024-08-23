<?php
$basicPath = './../basicphp/';
$type = @$_GET['type'];

if ($type == 'namespace') {
     include $basicPath . '/' . $type .'/index.php';

     exit;
} 


echo 'php basic';