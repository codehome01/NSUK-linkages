<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LINKAGES</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
<div class="spinner-wrapper">
    <div class="spinner"></div>
</div>
    <div class="navbar">
        <div class="logo">
                <img src="photo/logo.png" class="schoolL"  width="10%" alt="schoolLogo">
                <img src="photo/linkageLogo.png" class="linkagesL" width="10%" alt="schoolLogo">
        </div>
        <div class="container">
                <ul class="menu-nav">
                    <li ><a href="contact.php">Contact Us</a></li>
                   <!-- <li><a href="#">Profolio /</a></li>-->
                    <li><a href="about.php">About Us /</a></li>
                    <li><a id="click" href="index.php">Home /</a></li>
                </ul>
        </div>
</div>
</body>
</html>
<script src="jquery/jquery.js"></script>
<script>
    //preloader
$(document).ready(function() {
        $('.spinner-wrapper').fadeOut(1000);
});
</script>