<?php
    // подлючаем файл с классами проверки авторизации и вывода контент
    require '_login.php';

    // созданем новый объект
    $newSession = new LogPass;

    $title = $_SESSION["auth"] == true ? "База доступов" : "Авторизация";


    //print_r($_POST);

?>

<!DOCTYPE html>
<html lang="en" class="uk-background-muted">
<head>
    <?php include 'header.php'; ?>
</head>
<body>

    <?php
        // вызываем статическую ф-ю indexLoad() из класса Index
        Index::indexLoad();
    ?>
    <?php include 'footer.php'; ?>

</body>
</html>
