<?php 
require_once('content/meta.php');
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?= $meta->favicon; ?>
		<title><?= $meta->title; ?></title>

		<?php require_once('components/css.php'); ?>
		<?= $meta->ie_support; ?>
	</head>
	<body>
		<?php 
		$header_class = 'color_menu';
		require_once('components/header.php');
		require_once('components/hero.php');
		require_once('components/welcome.php');
		require_once('components/business-box.php');
		require_once('components/footer.php');
		require_once('components/scripts.php');
		?>
	</body>
</html>