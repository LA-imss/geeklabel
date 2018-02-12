<div class="section contact">
	<div class="container">
		<?php if (!empty($view->get_title())): ?>
			<div class="row contact--titile">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h2><?php print $view->get_title(); ?></h2>
				</div>
			</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 text-center">
				<?php print $rows; ?>
			</div>
		</div>
	</div>
</div>