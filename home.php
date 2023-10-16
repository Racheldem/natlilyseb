<?php
require 'homeLog.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>GLP</title>

    <link rel="stylesheet" href="myFont/css/all.css">
    <link rel="stylesheet" href="home.css">
    <style>
        
    </style>
</head>
<body>
    <nav>
        <input type="checkbox" name="check" id="check">
        <label for="check" class="checkBtn">
            <i class="fa fa-bars" class="checkBtn"></i>
        </label>
        <label for="" class="logo"><a href="login.php"> GLP</a> COMPANY LIMITED</label><a href=""></a>
        <ul>
            <li>
                <li><a href="home.php">HOME</a></li>
                <li><a href="services.php">SERVICES</a></li>
                <li><a href="register.php">REGISTER</a></li>
                <li><a href="clientLogin.php">LOGIN</a></li>
            </li>
        </ul>
    </nav>
    <section>
        <div class="textBox">
        <h1>TRAVEL TO UK WITH GLP</h1>
            <p class="myFormat2"><b>WITH GLP, YOU ARE ASSURED OF THE FOLLOWING:</b></p>
            <div class="myItems">
                <ul>
                    <li class="myFormat">Visa</li>
                    <li class="myFormat">Ticket</li>
                    <li class="myFormat">Work Permit</li>
                    <li class="myFormat">Health Insurance</li>
                    <li class="myFormat">Citizenship</li>
                    <li class="myFormat">Health & Safety Training</li>
                    <li class="myFormat">Consultation and Arrangement</li>
                    <li class="myFormat">Accomodation</li>
                </ul>
            </div>
            
          <p><?= $info1?></p>
          <p><?= $info2 ?></p>

          

            <a href="register.php" class="btnRegister">Click here to Register</a>
    
        </div>
    </section>
    
</body>
</html>