<?php

$access = array();
$access = file("access.php");

$login = trim($access[1]);
$pass = trim($access[2]);

$error = 0;
$error_class_login = "";
$error_class_pass = "";
$error_login = "";
$error_pass = "";

if(!isset($_SESSION["auth"])) {
    $_SESSION["auth"] = false;
}

if (isset($_POST["login_btn"])) { // проверка была ли нажата кнопка отправки
    $_SESSION["login"] = $_POST['login'];
    $_SESSION["pass"] = $_POST['pass'];
    if ($_SESSION["login"] == "" || strlen($_SESSION["login"]) == 0) {
        $error_login = "Введите login!";
        $error_class_login = "uk-form-danger";
        $error = true;
    } elseif ($_SESSION["login"] != $login) {
        $error_login = "Не верный login!";
        $error_class_login = "uk-form-danger";
        $error = true;
    } else {
        $error_class_login = "";
        $error = 0;
    }
    if ($_SESSION["pass"] == "" || strlen($_SESSION["pass"]) == 0) {
        $error_pass = "Введите пароль!";
        $error_class_pass = "uk-form-danger";
        $error = true;
    } elseif ($_SESSION["pass"] != $pass) {
        $error_pass = "Не верный пароль!";
        $error_class_pass = "uk-form-danger";
        $error = true;
    } else {
        $error_class_pass = "";
        $error = 0;
    }
    if($_SESSION["pass"] == $pass and $_SESSION["login"] == $login) {
        $_SESSION["auth"] = true;
    }
    //print_r($_SESSION);
}

?>