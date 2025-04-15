
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
   
        <h1>انشاء حساب</h1><br>
 <style>
    form {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: Arial, sans-serif;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="tel"],
    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    h3 {
        margin-top: 20px;
        font-size: 14px;
        text-align: center;
    }
</style>

<form action="includes/userRegister.inc.php" method="post">
    <label for="name">اسم المستخدم</label>
    <input type="text" placeholder="Enter your username" name="name" id="name">

    <label for="email">البريد</label>
    <input type="text" placeholder="Enter your email" name="email" id="email">

    <label for="phone">رقم الهاتف</label>
    <input type="tel" placeholder="Enter your phone number" name="phone" id="phone">

    <label for="pwd">كلمة السر</label>
    <input type="password" placeholder="Enter your password" name="pwd" id="pwd">

    <label for="Qualification">مؤهل</label>
    <input type="text" placeholder="Enter your Qualification" name="Qualification" id="Qualification">

    <label for="Sex">الجنس</label>
    <input type="text" placeholder="Enter your Sex" name="Sex" id="Sex">

    <label for="city">المدينة</label>
    <input type="text" placeholder="Enter your city" name="city" id="city">

    <label for="Specialization">التخصص</label>
    <input type="text" placeholder="Enter your Specialization" name="Specialization" id="Specialization">

    <button type="submit" name="submit">اشتراك</button>

    <h3>Already have an account? <a href="login.php">Login</a></h3>
</form>
<?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInput") {
                echo "<p class=\"warning\">Fill in all the fields!</p>";
            } else if ($_GET["error"] == "invaliduName") {
                echo "<p class=\"warning\">Invalid Username!</p>";
            } else if ($_GET["error"] == "invalidEmail") {
                echo "<p class=\"warning\">Invalid Email!</p>";
            } else if ($_GET["error"] == "invalidPwd") {
                echo "<p class=\"warning\">Password must be at least 4 characters!</p>";
            } else if ($_GET["error"] == "pwdDontMatch") {
                echo "<p class=\"warning\">Passwords don't match!</p>";
            } else if ($_GET["error"] == "uNameTaken") {
                echo "<p class=\"warning\">Username or email is already taken!</p>";
            } else if ($_GET["error"] == "stmtFailed") {
                echo "<p class=\"warning\">Something went wrong!</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p class=\"success\">You have registered!</p>";
            }
        }
        ?>

    </div>
    <div class="bottomMargin"></div>

</body>

</html>