<?php
//
//Standard Php Library.
spl_autoload_register("auto_load");
//
//
function auto_load($className){
    //
    //
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $extension = '.php';
    //
    if(strpos($url, 'includes')){
        //
        //
        $path = '../class';
    }
    else{
        //
        $path = 'class/';
    }
    //
    //
    require_once $path . $className . $extension;
}