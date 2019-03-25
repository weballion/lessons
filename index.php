<?php
    // проверка сессия и авторизация
    require '_login.php';

    $newSession = new LogPass;

    $title = "Авторизация";

    print_r($_SESSION);
    echo "<br>";
    foreach ($_COOKIE as $key => $value) {
        echo "<strong>" . $key . "</strong>" . " = " . $value . "<br>";
    }
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
