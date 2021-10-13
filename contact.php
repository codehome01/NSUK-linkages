<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css" type="text/css">
   
</head>

<body>
    <?php 
        require("header.php");
    ?>
    
    <section class="contact-container">
       
        <img src="photo/contact-us.jpg" width="100%" height="200px" alt="contact-image">
        <h1 style="text-align:center;margin-top:-110px;margin-bottom:70px;font-family:Arial, Helvetica, sans-serif;color:white;text-shadow:1px 3px 3px black">CONTACT FORM</h1>
        <div class="form-group">
                <form method="POST" action="includes/contact.inc.php">
                    <input type="text" name="name" placeholder="Enter Fullname" required>
                    <input type="email" name="email" placeholder="Email" required="email">
                    <textarea cols="12" rows="3" name="msg" placeholder="Message..."></textarea> 
                    <input type="submit" value="SEND" name="send">
                </form>
    
    </div>
    </section>
    
    <div id="contactAddress" style="margin-bottom:10%;margin-top:4%;border:1px solid grey;padding:2%;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;box-sizing:border-box">
       <div class="address1">
            <h3 style="margin-bottom:2%">ADDRESS</h3>
            <p style="margin-bottom:2%">NSUK Main Campus, Keffi, Nasarawa State, Nigeria</p>
       </div>
       <div class="address2">
            <h3 style="margin-bottom:2%">UNEP AFRICAN OFFICE</h3>
            <p style="margin-bottom:2%">UNITED NATIONS AVENUE, GIGIRI, P.O. Box 3055200100 Nairobi, Kenya</p>
       </div>
       <div class="address3">
            <h3 style="margin-bottom:2%">WEBSITE</h3>
            <p>WWW.nsuk.edu.ng, www.ebafosa.org, www.unevironment.org</p>
       </div>
       </div>
</body>    
</html>