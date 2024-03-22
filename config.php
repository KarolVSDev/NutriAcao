<?php
session_start();

$autoload = function($class){
    $file = 'classes/' . $class . '.php';
    include($file);
};

spl_autoload_register($autoload);

?>