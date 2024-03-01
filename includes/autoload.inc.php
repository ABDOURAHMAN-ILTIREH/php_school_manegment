<?php

spl_autoload_register('autoload');

function autoload($currenty_file){
    $url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

    if(strpos($url, 'includes') !== false){
        $path = "../classes/";
    }else{
        $path = 'classes/';
    }

    $extenton = '.class.php';
    $full_path = $path . $currenty_file .$extenton;

    if(file_exists($full_path)){
        return false;
    }

    include_once $full_path;
}