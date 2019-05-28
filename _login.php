<?php
    class LogPass {

        // обозначили две переменные $login и $pass
        public $login = "";
        public $pass = "";
    
        public function __construct () {
            session_start();
            // вызываем внут ф-и текущего класса с помощью self::
            self::parceLogPass();
            self::authCheck();
            self::authValidate();
            self::sessionCheck();
        }
        public function parceLogPass () {
            // создание переменную с доступами, файл передается как массив, каждая строка отдельный ключ в массиве
            $access = file("access.php");
            // удаляем пробелы и символы переноса курсора с помощью trim и присваем вторую строку логину и третью паролю (переменные были созданы в самом начале)
            $this->login = trim($access[1]);
            $this->pass = trim($access[2]);
        }
        public function authCheck () {
            if(!isset($_SESSION["auth"])) {
                // если значение auth в глоб переменной $_SESSION не существует то мы изначально присваем этой переменной false
                $_SESSION["auth"] = false;
            }
        }
        public function authValidate () {
            
            if (isset($_POST["login_btn"])) { // проверка была ли нажата кнопка отправки
                // переданные POSTом переменные записываем в $_SESSION с соотвествующими значениями
                $_SESSION["login"] = $_POST['login'];
                $_SESSION["pass"] = $_POST['pass'];

                // далее начинаем проверять логин и пароль

                // если логин пустой или кол-во символов = 0 просим ввести логин
                if ($_SESSION["login"] == "" || strlen($_SESSION["login"]) == 0) {
                    $_SESSION["error_login"] = "Введите логин!";
                    $_SESSION["error_class_login"] = "uk-form-danger";

                } elseif ($_SESSION["login"] != $this->login) { // если логин не верный просим ввести верный
                    $_SESSION["error_login"] = "Не верный логин!";
                    $_SESSION["error_class_login"] = "uk-form-danger";

                } else { // если логин верный то класс ошибки пустой
                    $_SESSION["error_class_login"] = "uk-form-success";
                    $_SESSION["error_login"] = "";

                }

                if ($_SESSION["pass"] == "" || strlen($_SESSION["pass"]) == 0) {
                    $_SESSION["error_pass"] = "Введите пароль!";
                    $_SESSION["error_class_pass"] = "uk-form-danger";

                } elseif ($_SESSION["pass"] != $this->pass) {
                    $_SESSION["error_pass"] = "Не верный пароль!";
                    $_SESSION["error_class_pass"] = "uk-form-danger";

                } else {
                    $_SESSION["error_class_pass"] = "uk-form-success";
                    $_SESSION["error_pass"] = "";

                }
                // если логин и пароль соовествуют то присваем переменной auth в глоб $_SESSION true
                if($_SESSION["pass"] == $this->pass and $_SESSION["login"] == $this->login) {
                    $_SESSION["auth"] = true;
                    // редиректим на эту же страницу чтобы при обновлении страницы форма не отправляла данные авторизации повторно
                    header('Location: /');
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


    // класс отображения формы авторизации или списка, в зависимости пройдена ли авторизация
    class Index {
        public $title = '';
        public static function indexLoad () {
            if (isset($_SESSION["auth"]) && $_SESSION["auth"]) { // если переменная auth в глоб $_SESSION существует и она = true то показываем список
                include 'links.php';
            } else { // если авторизация не пройдена - показываем формы с соответствующей ошибкой логина или пароля
                include 'login.php';
            }
        }
    }