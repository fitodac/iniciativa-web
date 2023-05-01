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
	<title><?= $meta->title; ?> &middot Contacto</title>

	<?php require_once('components/css.php'); ?>
	<?= $meta->ie_support; ?>
</head>

<body>
	<?php 
	require_once('components/header.php'); 
	
	$page_name = 'Contacto';
	require_once('components/page-header.php');
	?>

		
	<section class="contact_us_area">
		<div class="container">
			<div class="contact_us_inner">

				<div class="section_title">
					<h2>Contáctanos y mejora el futuro de tu empresa</h2>
					<p>En Iniciativa Consultoría estamos comprometidos en ofrecer soluciones empresariales personalizadas y de alta calidad. Si estás interesado en nuestros servicios o tienes alguna consulta, por favor no dudes en contactarnos. Estaremos encantados de ayudarte a alcanzar tus objetivos empresariales. Completa el formulario de contacto o utiliza nuestros datos de contacto para ponerte en contacto con nosotros. ¡Esperamos tener noticias tuyas pronto!</p>
				</div>

				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<?php include('components/contact-form.php'); ?>
						</div>
					</div>

					<div class="col-md-4">
						<div class="our_about_image">
							<img src="img/contact-us-1.jpg" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="contact_us_details">
				<div class="row">
					<div class="col-md-4">
						<div class="c_details_item">
							<div class="media">
								<div class="media-left">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="media-body">
									<span><?= $info->address; ?></span>
								</div>
							</div>
						</div>
					</div>
						<div class="col-md-4">
							<div class="c_details_item">
								<div class="media">
									<div class="media-left">
										<i class="fa fa-envelope-o"></i>
									</div>
									<div class="media-body">
										<a href="mailto:<?= $info->email; ?>"><?= $info->email; ?></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="c_details_item">
								<div class="media">
									<div class="media-left">
										<i class="fa fa-phone"></i>
									</div>
									<div class="media-body">
										<a href="tel:<?= $info->phone; ?>"><?= $info->phone; ?></a>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>

		

	<section class="map_area">
		<a 
			href="//t.ly/QYKf"
			target="_blank">
			<img 
				src="img/map.png" 
				alt="Mapa de ubicación de Iniciativa ACC">
		</a>
	</section>

		
	<?php 
	require_once('components/footer.php');
	?>
		
		
	<?php // Contact Success and Error message Area ?>
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
					<h2 class="modal-title">Gracias</h2>
					<p class="modal-subtitle">Tu mensaje ha sido enviado correctamente.<br>Nos comunicaremos a la brevedad</p>
				</div>
			</div>
		</div>
	</div>

	<?php // Modals error ?>

	<div id="error" class="modal modal-message fade" role="dialog">
			<div class="modal-dialog">
					<div class="modal-content">
							<div class="modal-header">
									<span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
									<h2 class="modal-title">Lo sentimos</h2>
									<p class="modal-subtitle">Algo ha salido mal y no hemos podido enviar tu mensaje.</p>
							</div>
					</div>
			</div>
	</div>
	<?php // End Contact Success and Error message Area ?>
		
		
		
	<?php require_once('components/scripts.php'); ?>
</body>
</html>