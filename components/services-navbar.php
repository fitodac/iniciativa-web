<div class="carrers_left">
	<ul class="nav nav-tabs" role="tablist">
		<?php foreach($services as $idx => $item): ?>
		<li 
			role="presentation"
			class="<?= !$idx ? 'active' : ''; ?>">
			<a 
				href="#<?= $item->tab ?>" 
				aria-controls="<?= $item->tab; ?>" 
				role="tab" 
				data-toggle="tab">
				<?= $item->title; ?>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>


	<div class="contact_info">
		<h2>Contáctanos</h2>
		<p><?= $info->address; ?></p>
		<h5>
			T: <a href="tel:<?= $info->phone; ?>"><?= $info->phone; ?></a>
		</h5>
		<h5>
			<a href="/contacto"><?= $info->email; ?></a>
		</h5>
	</div>
</div>