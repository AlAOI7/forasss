<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rr.css">
    <title>بيانات الفرصه</title>
</head>

<body>

    <header>
        <img src="image/logo2.png" alt="Logo" width="250" height="80">
        <h1>بيانات الفرصه</h1>
        <img src="image/vvvv.png" alt="Logo" width="160" height="110">
    </header>


    <div id="p3">
        <h3>عنوان الفرصة</h3>
        <input type="text"  name="title"/>
        <h3>تاريخ البداية</h3>
        <input type="date" id="startDate" name="startDate" required>
        <h3>تاريخ النهايه</h3>
        <input type="date" id="endDate" name="endDate" required>
        <h3> عدد ساعات التطوع </h3>
        <input type="text"  name="ouhr"/>
        <h3>العمر المطلوب</h3>
        <input type="text" name="age" />
        <h3>مجال الفرصه</h3>
        <select id="opportunityType" name="opportunityType" required>
            <option value="">اختر مجال الفرصة</option>
            <option value="religious">دينية</option>
            <option value="health">صحية</option>
            <option value="sports">رياضية</option>
            <option value="educational">تعليمية</option>
            <option value="tourism">سياحية</option>
            <option value="other">أخرى</option>
        </select>
        <h3>الجنس</h3>
        <span class="radio-buttons">
            <input type="radio" id="male" name="gender" value="male" checked>
            <label for="male">ذكر</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">أنثى</label>
        </span>
        <h3>وقت بداية الفرصة</h3>
        <input type="time" id="startTime" name="startTime" required>
        <h3>المؤهلات والمهارات المطلوبة</h3>
        <input type="text" name="moahe"/>
        <h3>عدد ايام التطوع </h3>
        <input type="text"  name="numberdy"/>
        <h3>موقع إقامة الفرصة</h3>
        <input type="text" id="opportunityLocation" name="opportunityLocation">
        <h3>مهام المتطوع</h3>
        <input type="text" id="opportunityLocation" name="opportunityLocation">
        <h3>الصورة الشخصية</h3>
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="imageUpload">اضف صورة شخصية:</label>
            <input type="file" id="imageUpload" name="imageUpload" accept="image/*">
            <button type="submit">تحميل الصورة</button>

            <br>
            <br>
            <button type="button" onclick="alert('تم التقديم بنجاح')">إضافة</button>

    </div>
    <div id="p4">
        <p>chancceofgiving@gmail.com</p>
        <img src="image/em5.png" alt="Logo" width="30" height="30">
    </div>
</body>

</html>
</body>

</html>