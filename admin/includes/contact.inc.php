<?php
session_start();
require("../autoload.inc.php");
?>




<?php require("../header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login page</title>
    <link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
    <div class="container-C">
        <table   width="90%" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding:5px;margin-left:5%; border-collapse:collapse;height:250px;overflow:auto"  border="1">
        
        <tr><th style="text-align:center;font-size:25px" colspan="6">LIST OF UNACKNOWLEDGE CONTACTS <span style="width:5%; height:5%;padding:3px;color:white;border-radius:100px; background-color:darkred" colspan="5" ><?php echo $_SESSION['count']; ?></span></th></tr>
            <tr style="cellpadding:10%; "><th >S/N</th><th>SENDER NAME</th><th>EMAIL</th><th>MESSAGE</th><th>DATE</th><th>MANAGE</th></tr>
                <?php
                    $userC = new contact();
                    $userC->getContact();
                    //starting of update
                    $update = new contact();
                    $update->setUpdate();
                    //end of update
                    //starting of delete
                    $delet = new contact();
                    $delet->setDelete();
                    //acknowledgement Delete function
                    $deleteAck = new contact();
                    $deleteAck->ackDel();

                ?>
        </table><hr/ style="margin-top:2%">

        <table width="90%" height="100px" border="1" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding:5px;margin-left:5%; border-collapse:collapse;overflow:auto;margin-top:3%">
        <tr><th style="text-align:center;font-size:25px" colspan="6">LIST OF ACKNOWLEDGE CONTACTS <span style="width:5%; height:5%;padding:3px;color:white;border-radius:100px; background-color:darkred" colspan="5" ><?php echo $_SESSION['seen']; ?></span></th></tr>
            <tr style="cellpadding:10%; "><th >S/N</th><th>SENDER NAME</th><th>EMAIL</th><th>MESSAGE</th><th>DATE ACKNOWLEDGE</th><th>MANAGE</th></tr>
            <tr>
                <?php
                    $seen = new contact();
                    $seen->getContactSeen();
                ?>
           </tr>
        </table>
    </div>
</body>
</html>