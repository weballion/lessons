<?php $title = "Авторизация"; ?>
<?php include 'login.php'; ?>

<!DOCTYPE html>
<html lang="en" class="uk-background-muted">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/uikit.css" />
    <link rel="stylesheet" href="css/custom.css" />
	<script src="js/uikit.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<title><?php echo $title; ?></title>
</head>
<body class="uk-flex uk-flex-center uk-flex-middle uk-flex-column" uk-height-viewport="expand: true">
    <div class="uk-section uk-position-relative">
        <div class="uk-container">

            <div class="uk-card uk-card-default uk-card-body uk-width-large uk-margin-auto">
                <form class="" name="login" action="" method="post">
                    <fieldset class="uk-fieldset">
                        <div class="uk-child-width-1-1 uk-grid-small" uk-grid>
                            <div>
                                <input class="uk-input <?=$error_class?>" type="text" placeholder="login" name="login" value="<?=($_SESSION["login"]) ? $_SESSION["login"] : ""?>">
                                <div class="uk-text-danger uk-text-small">
                                    <?=$error_login?>
                                </div>
                            </div>
                            <div>
                                <input class="uk-input <?=$error_class?>" type="text" placeholder="password" name="pass" value="<?=($_SESSION["pass"]) ? $_SESSION["pass"] : ""?>">
                                <div class="uk-text-danger uk-text-small">
                                    <?=$error_pass?>
                                </div>
                            </div>
                            <div>
                                <input class="uk-button uk-button-default uk-button-large uk-button-primary uk-width-1-1" type="submit" value="Войти" name="login_btn"/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>

<?php include 'footer.php'; ?>