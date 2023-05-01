<?php 
require_once('content/meta.php');
require_once('content/services.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?= $meta->favicon; ?>
	<title><?= $meta->title; ?> &middot Servicios</title>

	<?php require_once('components/css.php'); ?>
	<?= $meta->ie_support; ?>
</head>

<body>
	<?php 
	require_once('components/header.php'); 
	
	$page_name = 'Servicios';
	require_once('components/page-header.php');
	?>
		
	<!--================Carrers Area =================-->
	<section class="carrers_area">
		<div class="container">
			<div class="row">

				<div class="col-md-3">
					<?php require_once('components/services-navbar.php'); ?>
				</div>

				<div class="col-md-9">
					<div class="carrers_right_content">
						<div class="tab-content">

							<?php 
							foreach($services as $service){
								require_once('components/'.$service->content);
							}
							?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Carrers Area =================-->
		

	<?php 
	require_once('components/footer.php');
	require_once('components/scripts.php'); 
	?>
</body>
</html>