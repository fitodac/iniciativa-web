<?php 
if( !isset($header_class) ) $header_class = '';
require_once('content/general.php');
?>


<header class="main_header_area <?= $header_class; ?>">

	<div class="header_top">
		<div class="container">
			<div class="header_top_inner">
				<div class="pull-left">
					<a href="tel:<?= $info->phone; ?>">
						<i class="ri-phone-fill"></i>
						<?= $info->phone; ?>
					</a>
					<a href="/contacto">
						<i class="ri-mail-check-line"></i>
						<?= $info->email; ?>
					</a>
					<a href="javascript:void(0)">
						<i class="ri-time-line"></i>
						<?= $info->schedules; ?>
					</a>
				</div>
				<div class="pull-right">
					<ul class="header_social">
						<li>
							<a 
								href="<?= $info->fb_url; ?>"
								target="_blank">
								<i class="fa fa-facebook"></i>
								<?= $info->fb_user; ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="header_menu">
		<nav class="navbar navbar-default">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a 
						class="navbar-brand" 
						href="/">
						<?php 
						if( 'home' !== $page ){
							$color_iso = '#FFF';
							$color_font = '#FFF';
						}
						include('logo.php');
						?>
					</a>
				</div>

				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li 
							class="<?= 'home' === $page ? 'active' : ''; ?>">
							<a 
								href="<?= 'home' !== $page ? '/' : 'javascript:void(0)'; ?>" 
								class="" 
								role="link">Inicio</a>
						</li>
						<li class="<?= 'services' === $page ? 'active inner-nav' : ''; ?>">
							<a 
								href="<?= 'services' !== $page ? '/servicios' : 'javascript:void(0)'; ?>" 
								class="" 
								role="link">Servicios</a>
						</li>
						<li 
							class="<?= 'contact' === $page ? 'active inner-nav' : ''; ?>">
							<a 
								href="<?= 'contact' !== $page ? '/contacto' : 'javascript:void(0)'; ?>" 
								class="" 
								role="link">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
