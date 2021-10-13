<?php
require("../autoload.inc.php");

$uName  = trim($_POST['uName']);
$psw    = trim($_POST['psw']);

//instantiate class
$loginAd  =  new loginset();
$loginAd->setLogin($uName,$psw)
?>