<?php

class contact extends Dbh{
    private $name;
    private $email;
    private $msg;
  
   protected function setContacts($name,$email,$msg){
         $date  = date("d/m/Y");
         $status =0;
        $query = "INSERT into contact_table(`name`,`email`,`msg`,`status`,`date`) VALUES(?,?,?,?,?)";
        $stmt   = $this->connect()->prepare($query);
        $stmt->execute([$name,$email,$msg,$status,$date]);
        if($stmt){
            echo "<script>alert('Sent Successfully')</script>";
            echo "<script>window.location.href='../contact.php'</script>";
        }
    }
    }


?>