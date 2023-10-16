<?php
require 'clientLoginLog.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
     <link rel="stylesheet" href="myFont/css/all.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="register.css">
    

</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkBtn">
            <i class="fa fa-bars" class="checkBtn"></i>
        </label>
        <label for="" class="logo">GLP COMPANY LIMITED</label>
        <ul>
            <li>
                <li><a href="home.php">HOME</a></li>
                <li><a href="register.php">REGISTER</a></li>
                <li><a href="login.php">LOGIN</a></li>
               
            </li>
        </ul>
    </nav>
    <div class="heading">
        <h1 id="head">L O G I N</h1>
    </div>

    <form action="" method="POST" class= "myForm">
        <div id="content2">
           
            <label for="userName">Your E-mail</label><br><br>
            <input type="text" name="userName" placeholder="Enter your user name" class="box" value="<?= $userName?>"> 
            <p class="userNameError"><?=$userNameError;?></p><br><br>

            <label for="userPwd">Your National ID Number</label><br><br>
            <input type="password" name="userPwd" placeholder="Enter your password" class="box" value="<?= $userPwd?>">
            <p class="userPwdError"><?=$userPwdError;?></p><br><br>


            <button type="submit" name="insert">SUBMIT</button>
            <p class="wrongInfoError"><?=$wrongInfoError;?></p><br><br>

        </div>
    </form>
</body>
</html>