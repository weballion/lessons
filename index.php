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
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/uikit.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" href="images/fav.png">
    <script src="js/uikit.js"></script>
    <script src="js/uikit-icons.min.js"></script>
	<title><?php echo $title; ?></title>
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