<?php
    // проверка сессия и авторизация
    require '_login.php';
    $newSession = new LogPass;
    $title = "Авторизация";
?>

<!DOCTYPE html>
<html lang="en" class="uk-background-muted">
<head>
    <?php include 'header.php'; ?>
</head>
<body>
    <?php
        Index::indexLoad();
    ?>
    <?php include 'footer.php'; ?>