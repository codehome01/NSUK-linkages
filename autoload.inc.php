<?php
spl_autoload_register('myLoader');
    function myLoader($className){
        $path  = "classes/";
        $extention = ".class.php";
        $fullName =  $path.$className.$extention;

        require_once($fullName);
    }
