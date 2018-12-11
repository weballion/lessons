<?php
	$title = "Практика PHP";
// 	session_start ();
	
/*
	setcookie("num", 0, time() + 1000);
	
	// $_SESSION
	session_start (); // старт сессии на сервере
*/
	
/*
	$ses = (isset($_SESSION["ses"])) ? $_SESSION["ses"] : 0;
	$ses++;
	$_SESSION["ses"] = $ses;
	$_COOKIE["num"] = $ses;
	echo "Перезагрузок страницы $ses раз<br>-------<br>";
	
	// $_COOKIE
	foreach ($_COOKIE as $key => $value) {
		echo "{$key} : {$value}" . "<br>-------<br>";
	};
*/
	
// 	session_destroy(); // удаление сессии
	//Проверка нажата ли кнопка
/*
	if (isset($_POST["button"])) {
		if ($_POST["name"] != "" && $_POST["email"] != "") {
			echo "<h3 class=\"uk-text-center uk-margin-large uk-margin-large-top\">Ваша форма отправлена!</h3>";
		} else {
			echo"<h3 class=\"uk-text-center uk-margin-large uk-margin-large-top\">Заполните поле имя и email!</h3>";
		}
	}
*/
?>

<!DOCTYPE html>
<html lang="en" class="uk-background-default">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/custom.css" />
	<link rel="stylesheet" href="css/uikit.css" />
	<script src="js/uikit.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<title><?php echo $title; ?></title>
</head>
<body class="uk-container uk-background-muted" uk-height-viewport="expand: true">
	<h1 class="uk-text-center uk-margin-large uk-margin-large-top"><?php echo $title; ?></h1>
	<div class="uk-section">

<!--
    <?php
		if (isset($_POST["button"])) { // проверка была ли нажата кнопка отправки
			$formName = htmlspecialchars($_POST["name"]);
			$formEmail = htmlspecialchars($_POST["email"]);
			$formSubject = htmlspecialchars($_POST["subject"]);
			$formMess = htmlspecialchars($_POST["mess"]);
			$_SESSION["name"] = $formName;
			$_SESSION["email"] = $formEmail;
			$_SESSION["subject"] = $formSubject;
			$_SESSION["mess"] = $formMess;
			$error = 0;
			$error_class_name = "";
			$error_name = "";
			$error_email = "";
			if ($formName == "" || strlen($formName) == 0) {
				$error_name = "Введите ваше имя!";
				$error_class_name = "uk-form-danger";
				$error = true;
			}
			if ($formEmail == "" || !preg_match("/@/", $formEmail)) {
				$error_email = "Введите ваш email!";
				$error_class_email = "uk-form-danger";
				$error = true;
			}
			if (!$error) {
				$subject = "Тема письма";
				$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
				$massege = $formMess;
				$to = "aleksey.semenovich@gmail.com";
				$from = $formEmail;
				$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
				mail($to, $subject, $massege, $headers);
// 				header("Location: send.php?send=1");
				exit;
			}
		}	
	?>
-->


<?php
	$mysqli = false;
	function connectDB() {
		global $mysqli;
		$mysqli = new mysqli ("localhost", "lesbd", "lesbd", "lesbd");
		$mysqli->query("SET NAMES utf8");
	}
	
	function getFields($query) {
		global $mysqli;
		connectDB();
		$result_set = $mysqli->query($query);
		closeDB();
		return resultSetToArray($result_set);
	}
	
	function resultSetToArray($result_set) {
		$array = array();
		$mun = 0;
		while (($row = $result_set->fetch_assoc()) != false) {
			$mun++;
			$array[] = $row;
// 			print_r ($row);
			echo "Строка $mun: ";
			$num = 0;
			foreach ($row as $key => $value) {
				$num++;
				echo "{$key} = {$value}";
				if(count($row) > $num) {
					echo " ||| ";
				}
				
			}
			echo "<br>";
		}
// 		return $array;
	}
	
	function closeDB() {
		global $mysqli;
		$mysqli->close();
	}
	
	function addNewUsers ($query) {
		global $mysqli;
		connectDB();
		for ($i = $query; $i < 10; $i++) {
			$mysqli->query ("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('admin$i', '".md5("$i$i$i")."', '".date("Y-m-d H:i:s")."')");
		}
		closeDB();
	}
	
	
	
// 	addNewUsers (2);
	
// 	print_r(getFields("SELECT * FROM `users`"));
	getFields("SELECT `id`, `login` FROM `users` WHERE `id` > 10 AND `login` LIKE 'admin%' ORDER BY `id`");
	
	
/*
	function printFromDB ($fromDB) {
		while (($row = $result_set->fetch_assoc()) != false) {
			print_r ($row);
			echo "<br>";
		}
		echo "Users in DB = " . $result_set->num_rows;
	}
*/
	
	
// 	echo "Соединение установлено... " . $mysqli->host_info . "\n";
	
	
// 	$mysqli->query ("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('admin4', MD5('123'), '123')");
/*
	for ($i = 6; $i < 15; $i++) {
		$mysqli->query ("INSERT INTO `users` (`id`, `login`, `password`, `reg_date`) VALUES ('$i', 'admin$i', '".md5("123")."', '".time()."')");
	}
*/
/*
	$mysqli = new mysqli ("localhost", "lesbd", "lesbd", "lesbd");
	$mysqli->query ("SET NAMES 'utf8'");
	$fromDB = $mysqli->query ("SELECT * FROM `users`");
	printFromDB ($fromDB);
	$mysqli->close ();
*/
?>

<!--
<form class="uk-width-xlarge uk-margin-auto" name="feedback" action="send.php?send=1" method="post">
	<fieldset class="uk-fieldset">
        <legend class="uk-legend">Форма обратной связи</legend>
        <div class="uk-margin uk-position-relative">
	        <div class="uk-inline uk-width-1-1 uk-margin-small-bottom">
		        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
				<input class="uk-input <?=$error_class_name?>" type="text" placeholder="Введите имя" name="name" value="<?=$_SESSION["name"]?>">
	        </div>
            <div class="uk-text-danger uk-text-small">
	            <?=$error_name?>
            </div>
        </div>
        <div class="uk-margin uk-position-relative">
	        <div class="uk-inline uk-width-1-1 uk-margin-small-bottom">
		        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
				<input class="uk-input <?=$error_class_email?>" type="text" placeholder="Введите email" name="email" value="<?=$_SESSION["email"]?>">
	        </div>
            <div class="uk-text-danger uk-text-small">
	            <?=$error_email?>
            </div>
        </div>
        <div class="uk-margin uk-inline uk-width-1-1">
	        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: pencil"></span>
            <input class="uk-input <?=$error_class_subject?>" type="text" placeholder="Введите тему" name="subject" value="<?=$_SESSION["subject"]?>">
        </div>
        <div class="uk-margin uk-inline uk-width-1-1">
	        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: file-edit"></span>
            <textarea class="uk-textarea <?=$error_class_mess?>" rows="5" placeholder="Введите сообщение" name="mess"><?=$_SESSION["mess"]?></textarea>
        </div>
        <div class="uk-margin">
			<input class="uk-button uk-button-default uk-button-primary" type="submit" value="Отправить" name="button"/>
        </div>
    </fieldset>

</form>
-->



<?php
/*
	//цыклы
	for ($i=0; $i <= 10; $i++) {
		if ($i % 3 == 0) continue;
		if ($i >= 9) break;
		echo "Циклы #$i <br>";
	}
	$a = 10;
	do {
		echo "Первое действие: $a больше 5 - выводим<br>";
		$a--;
	} while ($a > 5);
	$array = array();
*/
?>


<?php 
	/*
	//работа с функцией isset() - проверка переменной на существование
	
	if (isset($a)) echo 'Переменная $a существует = '.$a;
	else echo 'Переменная $a не существует';
	*/
?>


<?php
	
/*
	//работа с функцией strpos() - проверяет совпадения в строке
	$name = "Строки - это самые распространенные типы переменных в языке PHP";
	echo strpos($name, "троки");
	$c =3;
	$var = "Мы ";
	$var .= "умеем. " . $var * 2;
	echo $var;
	echo "<br>" . $c++;
	echo "<br>" . $c++;
*/
	
?>



<?php 
/*
	// запись в файл
	$timeForFileWriteBefore = microtime(true);
	$file = fopen("new-file.txt", "a+t"); // открываем файл, если он не существует то создается файл new-file.txt, a+t - запись в конце файла без затирания символов, разрешено спец символ \n
	usleep(100);
	$timeForFileWriteAfter = microtime(true);
	$timeForFileWrite = $timeForFileWriteAfter - $timeForFileWriteBefore;
	$dateCurrent = date("Y-m-d H:i:s");
	$timeRound = round($timeForFileWrite, 5);
	fwrite($file, "$dateCurrent - Новое событие! Время отработки: $timeRound секунды\n"); // записываем в файл текст
	fclose($file); // закрываем файл после внесения данных
*/
	
/*
	// чтение из файла
	$fileName = "new-file.txt";
	$file_1 = fopen($fileName, "r"); // открываем файл на чтение и запись
	$fileRead = fread($file_1, filesize($fileName)); // читаем файл до последнего символа, filesize($fileName) - кол-во байт в файле, если киррилица - то 1 символ = 2 байтам
	fclose($file_1); // закрываем фвайл
	echo $fileRead;
*/
	
/*
	// сокращенны способ записи в файл (fopen, fwrite, fclose)
	file_put_contents("flle_2.txt", "Новый файл"); // каждый раз файл создается заново
	echo file_get_contents("flle_2.txt") . "<br>";
	echo filesize("flle_2.txt") . "<br>";
	echo __FILE__;
	echo "<br>" . fileperms(__FILE__);
	echo "<br>" . $_SERVER["REMOTE_ADDR"] . "<br><br><br>";
	
	foreach ($_SERVER as $key => $value) {
		echo "{$key} => {$value}" . "<br>";
	};
*/
/*
	// $_COOKIE
	foreach ($_COOKIE as $key => $value) {
		echo "{$key} : {$value}" . "<br>-------<br>";
	};
	
	$reloadTimes = (isset($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
	$reloadTimes++;
	echo "Перезагрузок страницы $reloadTimes раз";
*/
/*
	// отправка писем
	$massege = "ТЕСТ";
	$to = "aleksey.semenovich@gmail.com";
	$from = "aleksey.semenovich@gmail.com";
	$subject = "Тема письма";
	$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
	$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
	mail($to, $subject, $massege, $headers);
*/
	
?>



<?php 
	include 'footer.php'; 
?>