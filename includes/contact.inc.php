<?php
require("../autoload.inc.php");

    $name       =  trim($_POST['name']);
    $email      =  trim($_POST['email']);
    $msg        =  trim($_POST['msg']);

    //instantiate

    $set    = new contactset();
    $set->setSend($name,$email,$msg);

?>