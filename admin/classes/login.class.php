<?php

class login extends Dbh{
    private $uName;
    private $psw;
    protected function adminLogin($uName, $psw){
        $sql  = "SELECT * FROM admin WHERE `username`=? and `password`=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$uName,$psw]);
        $result = $stmt->rowCount();
        if($result>0){
            header("Location:dashboard.inc.php");
        }else{
            echo "<script>alert('DETAILS NOT MATCH')</script>";
            echo "<script>window.location.href='../login.php'</script>";
        }
    }
}

?>