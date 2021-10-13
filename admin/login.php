<?php

?>
<?php require("headerL.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

    <div class="container">
        <form method="POST" action="includes/login.inc.php">
            <div class="group-form>">
                <input type="text" id="input" name="uName" placeholder="Enter Username" required>
                <input type="password" id="input" name="psw" placeholder="Enter Password" required>
                <input type="submit" id="login" name="login" value="Login">
            </div>
        </form>
    </div>
</body>
</script>
</html>
<?php require("footer.php");