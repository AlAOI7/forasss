<?php 

require "include/db.php";

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <link rel="stylesheet" type="text/css" href="css/m.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرص التطوع</title>
</head>
<style>
    .table {
        margin-left: auto;
        margin-right: auto;
        width: 80%;
        border: 2px solid #000;
    }

    .table td {
        padding: 10px;
        border: 2px solid #000;
    }

    .radio-buttons {
        display: flex;
        justify-content: space-between;
    }

    .radio-buttons input[type="radio"] {
        margin-right: 5px;
    }
</style>

<body>
    <header>
    <img src="image/vvvv.png" alt="Logo" width="160" height="110">
      
        <h1>بيانات الفرصه</h1>
        <img src="image/logo2.png" alt="Logo" width="250" height="80">
    </header>
 
    <table class="table">
    <?php  
$volunteersql = mysqli_query($conn, "SELECT name, status FROM volunteer");
while ($volunteerrow = mysqli_fetch_assoc($volunteersql)) {
    $status = $volunteerrow['status']; // استرد قيمة الحالة من قاعدة البيانات
    
    // تعيين المتغيرات للاستخدام في الشيفرة النصية لاحقًا
    $isChecked = $status == 'active' ? 'checked' : '';
    $isNotChecked = $status == 'inactive' ? 'checked' : '';
    $displayCompleted = $status == 'active' ? 'مكتملة' : 'غير مكتملة';
    ?>
    <tr>
        <td>أسم الفرصة: <?= $volunteerrow['name']; ?></td>
        <td>حالة الفرصة:<br><br>
            <div class="radio-buttons">
                <input type="checkbox" id="individual1" name="status" value="active" <?= $isChecked ?>>
                <label for="individual1"> <?= $displayCompleted ?> </label>
                <input type="checkbox" id="organization1" name="status" value="inactive" <?= $isNotChecked ?>>
                <label for="organization1">غير مكتملة</label>
            </div>
        </td>
    </tr>
<?php } ?>
        
    </table>
   
    </div>

    <div id="p4">
        <p>chancceofgiving@gmail.com</p>
        <img src="image/em5.png" alt="Logo" width="30" height="30">
    </div>
</body>

</html>

</html>