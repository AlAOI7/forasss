<?php 
session_start();
  
require "db.php";

?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <link rel="stylesheet" type="text/css" href="css/mcs.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
	
    <style>
        body {
            background-color: #eeeeee;
            ;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        form {
            margin-top: 0px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 300px;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #p4 {
            display: flex;
            align-items: center;
            color: #000000;
            width: 100%;
            height: 60px;
            padding-left: 82%;
            border: 1px solid #bab9b9;
            margin-top: 12%;
        }
    </style>
</head>

<body>
    <div id="p1">
        <form action="register.html" method="post"></form>
        <header>
            <img src="image/logo2.png" alt="Logo" width="250" height="80">
            <img src="image/vvvv.png" alt="Logo" width="100" height="80">

        </header>
    </div>
    <div class="container">
        <div class="login-form">
            <h2>تسجيل الدخول</h2>
            <div class="user userLogin">
      <br>
        <form method="post" action="../../includes/userLogin.inc.php">
            <label>اسم المستخدم</label>
            <input type="text" placeholder="Enter your username" name="name" id="name">
            <label>كلمة السر</label>
            <input type="password" placeholder="Enter your password" name="pwd" id="pwd">
            <br>
            <button type="submit" name="submit">تسجيل</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInput") {
                echo "<p class=\"warning\">Fill in all the fields!</p>";
            } else if ($_GET["error"] == "invalidLogin") {
                echo "<p class=\"warning\">Invalid Username or Password!</p>";
            } else if ($_GET["error"] == "deleted") {
                echo "<p class='success'>Your account was deleted!</p>";
            }
        }
        ?>
    </div>
        </div>
    </div>
  
    <div id="p4">
        <p>chancceofgiving@gmail.com</p>
        <img src="image/em5.png" alt="Logo" width="30" height="30">
    </div>
</body>

</html>