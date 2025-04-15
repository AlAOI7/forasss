<?php

require_once('dbh.inc.php');
require_once('functions.inc.php');

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$pwd = $_POST["pwd"];
$Sex = $_POST["Sex"];
$city = $_POST["city"];
$Qualification= $_POST["Qualification"];
$Specialization = $_POST["Specialization"];

if (isset($_POST["submit"])) {

    if (userRegisterEmptyInput($name, $email, $phone, $pwd,$Specialization,$Sex,$city,$Qualification) !== false) {
        header("location:register.php?error=emptyInput");
        exit();
    }

    if (invaliduName($name) !== false) {
        header("location:register.php?error=invaliduName");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location:register.php?error=invalidEmail");
        exit();
    }

    if (invalidPwd($pwd) == false) {
        header("location:register.php?error=invalidPwd");
        exit();
    }

    if (invalidSex($Sex) == false) {
        header("location:register.php?error=invalidSex");
        exit();
    }

    if (invalidSpecialization($Specialization) == false) {
        header("location:register.php?error=invalidSpecialization");
        exit();
    }
    if (invalidCity($city) == false) {
        header("location:register.php?error=invalidCity");
        exit();
    }
    if (invaliduQualification($Qualification) !== false) {
        header("location:register.php?error=invaliduQualification");
        exit();
    }

    if (useruNameEmailExists($conn, $name, $email,$six,$city,$Specialization,$Qualification) !== false) {
        header("location:register.php?error=uNameTaken");
        exit();
        
    } else {
        userRegister($conn, $name, $email, $phone,$six,$city,$Specialization,$Qualification);
    }
} else {
    header("location:register.php");
    exit();
}