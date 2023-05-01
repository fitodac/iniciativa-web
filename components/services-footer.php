<div class="row service_advantage">
	<div class="col-md-7">
		<div class="service_advantage_left">
			
			<p>En Iniciativa nos aseguramos de que el proceso de apertura de tu negocio sea lo más fácil y fluido posible, para que puedas enfocarte en lo que realmente importa: hacer crecer tu negocio</p>
			
			<ul>
				<?php foreach($services as $item): ?>
				<li>
					<a href="#<?= $item->tab; ?>">
						<i class="ri-check-line"></i>
						<span><?= $item->title; ?></span>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="col-md-5">
		<div class="service_consultation_box">
			<h6>¿Tienes aluna pregunta?</h6>
			<h4>Estamos para ayudarte</h4>
			<a class="main_btn" href="/contacto">Consúltanos ahora</a>
		</div>
	</div>
</div>