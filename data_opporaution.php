
<?php 

require "include/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cs.css">
    <title>بيانات الفرصه</title>

</head>

<body>
    <header>
        <img src="image/logo2.png" alt="Logo" width="250" height="80">
        <img src="image/vvvv.png" alt="Logo" width="160" height="110">
    </header>
    <div id="p2">

	


		
						<?php  
				$kitchensql = mysqli_query($conn, "SELECT * FROM data_opporaution  ");
				while ($houserow = mysqli_fetch_assoc($kitchensql)) {

			?>
        <h1>بيانات الفرصه</h1>
        <a href="data_opporaution.html" onclick="alert('تم التقديم بنجاح')"><button>تقديم</button></a>

    </div>
    <div id="p3">
        <h3><?= $houserow['title']; ?>:عنوان الفرصه</h3>
        <h3><?= $houserow['dateend']; ?>:تاريخ البدايه</h3>
        <h3><?= $houserow['datestar']; ?>:تاريخ النهايه</h3>
        <h3><?= $houserow['Numberofvolunteerhours']; ?>:عدد ساعات التطوع</h3>
        <h3><?= $houserow['Area'];?>:مجال الفرصه</h3>
        <h3><?= $houserow['age']; ?>:العمر المطلوب</h3>
        <h3><?= $houserow['sex']; ?>:الجنس المطلوب</h3>
        <h3><?= $houserow['Requireskillsandqualifications'];?>:المهارات والمؤهلات المطلوبة</h3>
        <h3><?= $houserow['Opportunityresidencysite']; ?>:موقع إقامة الفرصة</h3>
        <h3><?= $houserow['Volunteertasks']; ?>:مهام المتطوع</h3>
        <?php } ?>	
        <style>
    #p_11 {
        width: 100%;
        text-align: center;
        background-color: #75bb8ae8;
        padding: 10px;
    }
</style>

        <div id="p_11">
            <p>chancceofgiving@gmail.com</p>
            <img src="image/em5.png" alt="Logo" width="30" height="30">
        </div>
</body>

</html>
</div>
</body>

</html>