<?php require_once('content/services.php'); ?>


<section class="business_box_area">
	<div class="container">
		<div class="row service_item_inner">

			<?php foreach($services as $item): ?>
			<div class="col-md-4 col-xs-6">
				<div class="business_box_item">
						
					<a 
						href="<?= $item->link; ?>" 
						class="business_image">
						<img 
							src="<?= $item->thumbnail; ?>" 
							alt="<?= $item->title; ?>">
					</a>
					<div class="business_text">
						<a 
							href="<?= $item->link; ?>">
							<h4><?= $item->title; ?></h4>
						</a>
						<h5><?= $item->subtitle; ?></h5>
					</div>
				</div>
			</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>