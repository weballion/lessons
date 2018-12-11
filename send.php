<?php
	$title = "Форма отправлена";
	session_start();
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
	
	<div class="uk-section">
		
		<div class="uk-position-large uk-position-center uk-text-center">
			<div class="uk-card uk-card-primary uk-card-body uk-padding-large">
				<h1 class="uk-text-center uk-margin"><?php echo $title; ?></h1>
				<div class="uk-margin">
					<?php
						if($_GET["send"] == 1) {
							echo "Все данные отправлены на почту " . $_SESSION["email"];
						}
					?>
				</div>
				<a class="uk-link-heading um-margin" href="/">На главную</a>
			</div>
			
		</div>

<?php 
	include 'footer.php'; 
?>