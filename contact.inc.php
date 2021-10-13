<?php

    $name       =  trim($_POST['name']);
    $email      =  trim($_POST['email']);
    $msg        =  trim($_POST['msg']);
    //$date       =  date("d/m/Y");

    //instantiate

    $setSend    = new contactset();
    $setSend->setSend($name,$email,$msg);

?>