<!DOCTYPE html>
<html lang="ar">

<head>
    <link rel="stylesheet" type="text/css" href="css/mcs.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نسيان كلمة المرور</title>

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
            margin-top: 17%;
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
    <h2>نسيت كلمة المرور؟</h2>
    <form>
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required>
        <label for="verification">رقم التحقق:</label>
        <input type="text" id="verification" name="verification" required>
        <br><br>
        <a href="login.html"><button type="submit">إرسال</button></a>
    </form>

    <div id="p4">
        <p>chancceofgiving@gmail.com</p>
        <img src="image/em5.png" alt="Logo" width="30" height="30">
    </div>
</body>

</html>