<?php

spl_autoload_register('autoload');

function autoload($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }
    $extension = '.class.php';

    $fullpath = $path.$className.$extension;

    include_once $fullpath;
}









// spl_autoload_register('autoloader');

// function autoloader($className){
//     $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//     $path = 'classes/';
//     $extension = '.class.php';
//     $fullpath = $path.$className.$extension;

//     if (!file_exists($fullpath)) {
//         return false;
//     }
//     include_once $fullpath;
// }