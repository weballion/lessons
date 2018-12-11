<!-- Выводим конфиг -->
<?php include_once('config.php') ?>
<!DOCTYPE html>
<html lang="ru" class="uk-background-muted">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/uikit.css" />
	<link rel="stylesheet" href="css/custom.css" />
	<link rel="apple-touch-icon-precomposed" href="http://weballion.com/images/apple-touch-icon.png">
	<link rel="shortcut icon" href="http://weballion.com/images/fav.png">
	<script src="js/uikit.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<title><?php echo $title; ?></title>
</head>
<body>
	<div class="uk-section">
		<div class="uk-container">

			<!-- Выводим функции -->
			<?php include_once('func.php') ?>

			<div class="uk-position-small uk-position-top-left uk-position-fixed">
				<a href="#add_new" class="uk-button uk-button-primary" uk-icon="icon: plus" uk-tooltip="Добавить новый блок" uk-scroll></a>
			</div>

			<div class="uk-position-small uk-position-top-right uk-position-absolute uk-text-muted uk-text-small">
				<div class="count_box">
					Всего записей: <?php echo sizeof($json_arr,0); ?>
				</div>
			</div>

			<h1 class="uk-text-center uk-margin-large"><?php echo $title; ?></h1>
			
			<!-- Выводим блоки -->
			<?php include_once('lines_grid.php') ?>

			<!-- Добавление нового блока -->
			<?php include_once('add_new.php') ?>
			
		</div>
	</div>
</body>
</html>