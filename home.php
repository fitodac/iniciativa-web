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

		<style>
			.homepage-landing{
				background-color: #2D4E90;
				width: 100%;
				display: grid;
			}

			.homepage-landing div{
				display: flex;
				justify-content: center;
			}

			.homepage-landing img{
				width: 100%;
				max-width: 992px;
			}

			@media (min-width: 768px){
				.homepage-landing{
					margin-top: 160px !important;
				}
			}

			@media (min-width: 992px){
				.homepage-landing{
					margin-top: 134px !important;
				}
			}
		</style>
	</head>
	<body>
		<?php 
		$header_class = 'color_menu';
		require_once('components/header.php');
		?>
		<div class="homepage-landing">
			<div><img src="./img/home/01.webp" alt=""></div>
			<div><img src="./img/home/02.webp" alt=""></div>
			<div><img src="./img/home/03.webp" alt=""></div>
			<div><img src="./img/home/04.webp" alt=""></div>
		</div>

		<?php 
		// require_once('components/hero.php');
		// require_once('components/welcome.php');
		// require_once('components/business-box.php');
		require_once('components/footer.php');
		require_once('components/scripts.php');
		?>
	</body>
</html>