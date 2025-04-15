<?php 

require "include/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cs.css">
    <title>حساب المستخدم </title>



    <link rel="shortcut icon" type="image/x-icon" href="image/uqu.png">
</head>

<body>
<style>
    #p2 {
        float: right;
        width: 30%;
        margin-left: 20px;
    }

    #uu {
        
        width: 70%;
    }
</style>
<header>
        <img src="image/logo2.png" alt="Logo" width="250" height="80">

        <img src="image/uqu.png" alt="Logo" width="150" height="90">

    </header>
    <div id="p2" action="db_t1.php" method="post">
            <?php  
            $housesql = mysqli_query($conn, "SELECT * FROM user");
            while ($houserow = mysqli_fetch_assoc($housesql)) {
            ?>
                <img width="140px" height="150px" src="./user/<?= $houserow['image']; ?>">

        <p>الصوره الشخصيه</p>
        <p><?= $houserow['name']; ?>:اسم المستخدم</p>
        <nav class="navigation">
            <a href="#مع صفحه اريام"><button>العوده للصفحه الرئسيه</button></a>
            <a href="#مع صفحهر"> <button>فرص التطوع </button></a>
            <a href="create_cv.html"><button>تحرير </button></a>
        </nav>
        
    </div>

    <div id="uu">
        <h1>السيرة الذاتيه</h1>
        <p><?= $houserow['name']; ?>:الاسم</p>
        <p><?= $houserow['email']; ?>:البريد الالكتروني</p>
        <p> <?= $houserow['identification']; ?>:الهوية</p>
        <p><?= $houserow['dateofbirth']; ?>:تاريخ الميلاد</p>
        <p> <?= $houserow['Sex']; ?>:الجنس</p>
        <p> <?= $houserow['city']; ?>:عنوان السكن</p>
        <p><?= $houserow['Qualification']; ?>:المؤهل العلمي</p>
        <p><?= $houserow['Ofexperience']; ?>:الخبرات</p>
        <p><?= $houserow['Qualifications']; ?>:الدورات</p>
        <p><?= $houserow['phone']; ?>:رقم الهاتف</p>
        </div>
     
    <?php } ?>


    <div id="p4">
        <div class="vol ">
            <p1>chancceofgiving@gmail.com</p1><br>
            <img src="image/em5.png " alt="Logo " width="30 " height="30 ">

        </div>
    </div>
</body>




</html>