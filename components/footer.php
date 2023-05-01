<?php 
require_once('content/general.php');
?>

<?php if('contact' !== $page): ?>
<section class="get_consult_area">
	<div class="container">
		<div class="pull-left">
			<h3>Encuentra la solución que se adapte mejor a tu negocio</h3>
		</div>
		<div class="pull-right">
			<a class="submit_btn" href="contacto">Contactanos ahora</a>
		</div>
	</div>
</section>
<?php endif; ?>


<!--================Footer Area =================-->
<footer class="footer_area">
	<div class="footer_widget">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<aside class="f_widget about_widget">
						<?php 
						$color_iso = '#FFF';
						$color_font = '#FFF';
						$logo_width = '110';
						include('logo.php');
						?>
						<p>Confía en nosotros, en Iniciativa trabajamos para que tu negocio crezca sin límites.</p>
						<ul class="f_social">
							<li>
								<a 
									href="<?= $info->fb_url; ?>"
									target="_blank">
									<i class="fa fa-facebook"></i> <?= $info->fb_user; ?>
								</a>
							</li>
						</ul>
					</aside>
				</div>
				
				<div class="col-md-3 col-xs-6"></div>
				
				<div class="col-md-3 col-xs-6">
					<aside class="f_widget link_widget">
						<div class="f_title">
							<h3>Nuestros servicos</h3>
						</div>
						<ul>
							<li><a href="#">-  Apertura de negocios</a></li>
							<li><a href="#">-  Administración</a></li>
							<li><a href="#">-  Proyectos de inversión</a></li>
							<li><a href="#">-  Gestión</a></li>
							<li><a href="#">-  Registro de marca</a></li>
							<li><a href="#">-  Sistemas de organización</a></li>
						</ul>
					</aside>
				</div>

				<div class="col-md-3 col-xs-6">
					<aside class="f_widget contact_widget">
						<div class="f_title">
							<h3>Contáctanos</h3>
						</div>
						<div class="contact_inner">
							<div class="media">
								<div class="media-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="media-body">
									<h4><?= $info->name; ?></h4>
									<p><?= $info->address; ?></p>
								</div>
							</div>
							<div class="media">
								<div class="media-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="media-body">
									<a href="tel:<?= $info->phone; ?>"><?= $info->phone; ?></a>
								</div>
							</div>
							<div class="media">
								<div class="media-left">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</div>
								<div class="media-body">
									<a href="/contacto"><?= $info->email; ?></a>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>

	<div class="footer_copyright">
		<div class="container">
			<div class="footer_copyright_inner">
				<div class="pull-left">
					<p>&copy; <?= date('Y'); ?> <?= $info->name; ?> - Todos los derechos reservados.</p>
				</div>
				<div class="pull-right">
					<h4>por <a href="https://fitodac.com" target="_blank">fitodac</a></h4>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--================End Footer Area =================-->