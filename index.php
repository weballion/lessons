<?php
    session_start();
//    echo "SESSION BEFORE: ";
//    print_r($_SESSION);
//    echo "<br>";
    include 'login.php';

    if (isset($_GET['session']) && $_GET['session'] == "off") {
        session_destroy();
        header('Location: /');
        //echo "SESSION IS OFF<br>";
    }

    $title = "Авторизация";
//    echo "<br>";
//    echo "SESSION AFTER: ";
//    print_r($_SESSION);
//    echo "<br>GET: ";
//    print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en" class="uk-background-muted">
<head>
    <?php include 'header.php'; ?>
</head>
<body>
    <div class="uk-section uk-position-relative uk-width-1-1">

        <?php
            if (isset($_SESSION["auth"]) && $_SESSION["auth"]) {
                include 'links.php';
            } else {
                include 'main.php';
            }
        ?>
    </div>
<?php include 'footer.php'; ?>