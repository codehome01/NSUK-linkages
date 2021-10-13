<?php

class loginset extends login{
    public function setLogin($uName, $psw){
        $this->adminLogin($uName, $psw);
    }
}
?>