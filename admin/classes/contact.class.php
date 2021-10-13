<?php
class contact extends Dbh{
    //list of unacknowledge contacts
    public function getContact(){
        $sql = "SELECT * FROM `contact_table` WHERE `status`=0";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $row = $stmt->rowCount();
        $_SESSION['count']=$row;
        if($row > 0){
            $results =  $stmt->fetchAll();
            // $results->fetchAll();
            $count=1;
            foreach($results as $result){
                $cont_id = $result['contact_id'];
                $name  = $result['name'];
                $email = $result['email'];
                $msg   = $result['msg'];
                $date  = $result['date'];
                echo "<tr ><td >".$count."</td><td>".$name."</td><td>".$email."</td><td>".$msg."</td><td>".$date."</td><td>
                <a style='text-decoration:none;background-color:lightgreen;padding-left:5px;color:white;font-family:arial;padding-right:5px;border-radius:25px;' href='?seenCon_id=".$result['contact_id']."'>SEEN </a>
                <a style='text-decoration:none;background-color:Red;padding-left:5px;color:white;font-family:arial;padding-right:5px;border-radius:25px;' href='?trashCon_id=".$result['contact_id']."'>TRASH</a></td></tr>";
                $count++;
            }
        }else{
           echo "NO CONTACT YET<br>PLEASE TRY AGAIN LATER<br/>";
        }
      

    }
   
    public function setUpdate(){
        $dateSeen = date("d/m/Y");
    //echo $dateSeen;
        if(isset($_GET['seenCon_id'])){
            $con_id=$_GET['seenCon_id'];
        $sql  =  "UPDATE contact_table SET `status`=1,`dateSeen`=? WHERE `contact_id`=$con_id and `status`=0";
        $stmt = $this->connect()->prepare($sql);
        $update = $stmt->execute([$dateSeen]);
        
        if($update){
            echo "<script>alert('CONTACT ACKNOWLEDGE SUCCESSFUL')</script>";
        }else{
            echo "<script>alert('CONTACT ACKNOWLEDGE FAILED')</script>";
        }
    }
    }

    public function setDelete(){
        if(isset($_GET['trashCon_id'])){
        $del_id = $_GET['trashCon_id'];
        $sql = "DELETE FROM `contact_table` WHERE `contact_id`=$del_id";
        $stmt = $this->connect()->prepare($sql);
        $delete = $stmt->execute([]);
        if($delete){
            echo "<script>alert('ONE ROW SUCCESSFULLY DELETED')</script>";
        }else{
            echo "<script>alert('CONTACT DELETED FAILED')</script>";
        }
        }
    }

    public function getContactSeen(){
        $sql  = "SELECT * FROM `contact_table` WHERE `status`=1";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $rowSeen = $stmt->rowCount();
        $_SESSION['seen'] = $rowSeen;
        if($rowSeen>0){
            $count1=1;
            $results = $stmt->fetchAll();
            foreach($results as $result){
                
                $name   =  $result['name'];
                $email  =  $result['email'];
                $msg   =  $result['msg'];
                $date  =  $result['dateSeen'];
                echo "<tr ><td >".$count1."</td><td>".$name."</td><td>".$email."</td><td>".$msg."</td><td>".$date."</td><td>
                <a style='text-decoration:none;background-color:Red;padding-left:5px;color:white;font-family:arial;padding-right:5px;border-radius:25px;' href='?trashCon_id=".$result['contact_id']."'>TRASH</a></td></tr>";
                $count1++;
            }
        }else{
           echo "NO ACKNOWLEDGE CONTACT YET<br>PLEASE TRY AGAIN LATER<br/>";
        }
    }
    public function ackDel(){
    if(isset($_GET['trashCon_id'])){
        $delete_id  = $_GET['trashCon_id'];
        $sql = "DELETE FROM `contact_table` WHERE `contact_id` =$delete_id and `status`=1";
        $stmt = $this->connect()->prepare($sql);
        $deleted = $stmt->execute([$delete_id]);
        if($deleted){
            echo "<script>alert('ONE ROW HAS BEEN DELETED SUCCESSFULLY')";
        }else{
             echo "<script>alert('FAILLED TO DELETE')";
        }
    }
    }
}
?>