<?php
    session_start ();
    $title = "Авторизация";
    include 'login.php';
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
            if ($_SESSION["auth"]) {
                include 'links.php';
            } else {
                include 'main.php';
            }
        ?>
    </div>
<?php include 'footer.php'; ?>