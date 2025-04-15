<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/mcs.css">
    <title>واجهة تسجيل </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>



    <header>
        <img src="image/logo2.png" alt="Logo" width="250" height="80">
        <img src="image/vvvv.png" alt="Logo" width="100" height="80">

    </header>

    <div id="p2">
        <h1>تسجيل</h1>
        <p> ( فَمَن تَطَوَّعَ خَيْرًا فَهُوَ خَيْرٌ لَّهُ ) </p>
    </div>

    <div id="p_3">
        <h1>نوع التسجيل</h1>
        <div class="radio-buttons">
            <input type="radio" id="individual" name="registration_type" value="individual" checked>
            <label for="individual">متطوع</label>
            <input type="radio" id="organization" name="registration_type" value="organization">
            <label for="organization"> الشركة</label>
        </div>

        <div class="input-group" id="individual_registration_fields">

            <div class="input-group">
                <label for="password">الهوية</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="username">اسم المستخدم</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">البريد الإلكتروني</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">كلمة المرور</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button>
                <a href="create_cv.html">التالي</a>
            </button>
        </div>
        <div class="input-group" id="organization_registration_fields" style="display: none;">
            <label for="organization_name">اسم الشركة</label>
            <input type="text" id="organization_name" name="organization_name" required><br>
            <label for="organization_email">ايميل الشركة</label>
            <input type="email" id="organization_email" name="organization_email" required><br>
            <label for="website">موقع الشركة الالكتروني</label>
            <input type="url" id="website" name="website" required><br>
            <div class="input-group">
                <label for="password">كلمة المرور</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">إنشاء حساب</button>
        </div>

        </form>
    </div>

    <script>
        const individualRegistrationFields = document.getElementById('individual_registration_fields');
        const organizationRegistrationFields = document.getElementById('organization_registration_fields');

        const registrationTypeRadios = document.querySelectorAll('input[name="registration_type"]');
        const individualButton = document.getElementById('individual');
        const organizationButton = document.getElementById('organization');

        registrationTypeRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.id === 'individual') {
                    individualRegistrationFields.style.display = 'block';
                    organizationRegistrationFields.style.display = 'none';
                } else {
                    individualRegistrationFields.style.display = 'none';
                    organizationRegistrationFields.style.display = 'block';
                }
            });
        });

        individualButton.addEventListener('click', () => {
            alert("بيانات التسجيل للمتطوع");
        });

        organizationButton.addEventListener('click', () => {
            alert("بيانات التسجيل للشركة");
        });
    </script>
    </div>
    <div id="p4">
        <p>chancceofgiving@gmail.com</p>
        <img src="image/em5.png" alt="Logo" width="30" height="30">


    </div>
</body>

</html>
</body>

</html>