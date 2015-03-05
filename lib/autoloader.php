<?php

function __socket_autoload($classname){
    $class = str_replace('Socket_', '', $classname);
    $lib = dirname(__FILE__);
    $filepath = implode(DIRECTORY_SEPARATOR, array($lib, 'Socket', $class . '.php'));
    if(is_file($filepath))
        require_once $filepath;
}

spl_autoload_register('__socket_autoload');