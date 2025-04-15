<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء سيرة ذاتية</title>
    <link rel="stylesheet" type="text/css" href="css/mcs.css">


</head>

<body>
<header>
        <img src="image/logo2.png" alt="Logo" width="250" height="80">

        <img src="image/uqu.png" alt="Logo" width="150" height="90">

    </header>
    <div class="container">
        <div id="p2">
            <h1>إنشاء سيرة ذاتية</h1>
        </div>
        <div id="p_3">
            <form action="#">
                <div class="input-group">
                    <label for="name">الاسم</label>
                    <input type="string" id="id" name="name" required>

                </div>

                <div class="input-group">
                    <label for="id">الهوية</label>
                    <input type="text" id="name" name="idname" required>
                </div>

                <div class="input-group">
                    <label for="specialty">التخصص</label>
                    <input type="text" id="specialty" name="specialty" required>

                </div>

                <div class="input-group">
                    <label for="qualifications">المؤهلات</label>
                    <input type="text" id="qualifications" name="qualifications" required>

                </div>

                <div class="input-group">
                    <label for="educationalQualification">المؤهل العلمي</label>
                    <input type="text" id="educationalQualification" name="educationalQualification" required>

                </div>

                <div class="input-group">
                    <label for="city">المدينة:</label>
                    <select id="cities">
                        <option value="riadh">الرياض</option>
                        <option value="makkah">مكة</option>
                        <option value="jeddah">جدة</option>
                        <option value="taif">الطائف</option>
                        <option value="shar">الشرقية</option>
                        <option value="non">اخرى</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="dateOfBirth">تاريخ الميلاد:</label>
                    <input type="date" id="dateOfBirth" name="dateOfBirth" required>
                </div>

                <div class="input-group radio-buttons">
                    <label>الجنس:</label>
                    <input type="radio" id="male" name="gender" value="male" checked>
                    <label for="male">ذكر</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">انثى</label>
                </div>

                <div class="upload-group">
                    <form action="/upload_profile_picture" method="post" enctype="multipart/form-data">
                        <label for="profile_pic">اختر صورة شخصية:</label>
                        <input type="file" id="profile_pic" name="profile_pic" accept="image/*">
                        <input type="submit" value="تحميل">
                    </form>
                </div>

                <button type="submit">إنشاء</button>
            </form>
        </div>
    </div>
    <div id="p4">
        <p>chancceofgiving@gmail.com</p>
        <img src="image/em5.png" alt="Logo" width="30" height="30">
    </div>
</body>

</html>
</div>
</body>

</html>