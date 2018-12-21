<?php

    class LogPass {
        public $login = "";
        public $pass = "";
    
        public $error = 0;
        public $error_class_login = "";
        public $error_class_pass = "";
        public $error_login = "";
        public $error_pass = "";
    
        public function __construct () {
            session_start();
            self::parceLogPass();
            self::authCheck();
            self::authValidate();
            self::sessionCheck();
        }
        public function parceLogPass () {
            // создание переменную с доступами, файл передается как массив, каждая строка отдельный ключ в массиве
            $access = file("access.php");
            // удаляем пробелы и символы переноса курсора с помощью trim и и присваем вторую строку логину и третью паролю
            $this->login = trim($access[1]);
            $this->pass = trim($access[2]);
        }
        public function authCheck () {
            if(!isset($_SESSION["auth"])) {
                $_SESSION["auth"] = false;
            }
        }
        public function authValidate () {
            if (isset($_POST["login_btn"])) { // проверка была ли нажата кнопка отправки
                $_SESSION["login"] = $_POST['login'];
                $_SESSION["pass"] = $_POST['pass'];
                if ($_SESSION["login"] == "" || strlen($_SESSION["login"]) == 0) {
                    $this->error_login = "Введите login!";
                    $this->error_class_login = "uk-form-danger";
                    $this->error = true;
                } elseif ($_SESSION["login"] != $this->login) {
                    $this->error_login = "Не верный login!";
                    $this->error_class_login = "uk-form-danger";
                    $this->error = true;
                } else {
                    $this->error_class_login = "";
                    $this->error = 0;
                }
                if ($_SESSION["pass"] == "" || strlen($_SESSION["pass"]) == 0) {
                    $this->error_pass = "Введите пароль!";
                    $this->error_class_pass = "uk-form-danger";
                    $this->error = true;
                } elseif ($_SESSION["pass"] != $this->pass) {
                    $this->error_pass = "Не верный пароль!";
                    $this->error_class_pass = "uk-form-danger";
                    $this->error = true;
                } else {
                    $this->error_class_pass = "";
                    $this->error = 0;
                }
                if($_SESSION["pass"] == $this->pass and $_SESSION["login"] == $this->login) {
                    $_SESSION["auth"] = true;
                }
            }
        }
        public function sessionCheck () {
            if (isset($_GET['session']) && $_GET['session'] == "off") {
                session_destroy();
                header('Location: /');
            }
        }

    }

    class Index {
        public static function indexLoad () {
            if (isset($_SESSION["auth"]) && $_SESSION["auth"]) {
                include 'links.php';
            } else {
                include 'login.php';
            }
        }
    }
?>