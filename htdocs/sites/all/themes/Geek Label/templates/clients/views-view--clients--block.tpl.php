<section class="section clients">
	<div class="container">
		<?php if (!empty($view->get_title())): ?>
			<div class="row clients--title">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h2><?php print $view->get_title(); ?></h2>
				</div>
			</div>
		<?php endif; ?>

		<div class="row clients--list">
			<?php print $rows; ?>
		</div>
	</div>
</section>