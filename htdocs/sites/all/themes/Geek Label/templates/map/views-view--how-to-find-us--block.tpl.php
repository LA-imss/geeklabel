<div class="section google-map">
	<div class="container">
		<?php if (!empty($view->get_title())): ?>
			<div class="row map--titile">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-xs hidden-sm hidden-md text-center">
					<h2><?php print $view->get_title(); ?></h2>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-lg text-center">
					<h2>Find us</h2>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<?php print $rows; ?>
</div>