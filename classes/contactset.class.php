<?php

class contactset extends contact{
    public function setSend($name,$email,$msg){
        $this->setContacts($name,$email,$msg);
    }
}

?>