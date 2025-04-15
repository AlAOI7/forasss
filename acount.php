

<?php 

require "include/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب المستخدم </title>
    <link rel="stylesheet" type="text/css" href="css/rr.css">
<!-- تضمين Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

<!-- تضمين Bootstrap JS و jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="image/uqu.png">
</head>



<body>


    <header>
        <img src="image/logo2.png" alt="Logo" width="250" height="80">

        <img src="image/uqu.png" alt="Logo" width="150" height="90">

    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php  
    $housesql = mysqli_query($conn, "SELECT * FROM user");
    while ($houserow = mysqli_fetch_assoc($housesql)) {
    ?>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">حساب المستخدم <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">فرص التطوع</a>
            <a class="nav-item nav-link" href="#">تحرير</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img width="140px" height="150px" src="./user/<?= $houserow['image']; ?>">
            <p>الصورة الشخصية</p>
        </div>
        <div class="col-md-9">
            <h1><?= $houserow['name']; ?></h1>
            <p>اسم المستخدم: <?= $houserow['name']; ?></p>
            <p>البريد الإلكتروني: <?= $houserow['email']; ?></p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h1>السيرة الذاتية</h1>
    <div class="row">
        <div class="col-md-6">
            <p>الهوية: <?= $houserow['identification']; ?></p>
            <p>تاريخ الميلاد: <?= $houserow['dateofbirth']; ?></p>
            <p>الجنس: <?= $houserow['Sex']; ?></p>
        </div>
        <div class="col-md-6">
            <p>المدينة: <?= $houserow['city']; ?></p>
            <p>المؤهل العلمي: <?= $houserow['Qualification']; ?></p>
            <p>التخصص: <?= $houserow['Specialization']; ?></p>
            <p>المؤهلات: <?= $houserow['Qualifications']; ?></p>
        </div>
    </div>
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