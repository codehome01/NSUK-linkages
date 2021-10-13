<?php

    class Dbh{
        private $host   =  "localhost";
        private $user   =  "root";
        private $psw    =  "";
        private $dbname =  "linkages"; 

        protected function connect(){
            $dns = 'mysql:host='.$this->host.';dbname='.$this->dbname;
            $pdo = new PDO($dns,$this->user,$this->psw);
            $pdo->setATTRIBUTE(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
        }
    
?>