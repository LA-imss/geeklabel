<?php foreach ($fields as $id => $field): ?>
	<?php
	if($id=='field_service_image'){$f1=$field->content;}
	if($id=='title'){$f2=$field->content;}
	?>
<?php endforeach; ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 text-center">
	<div class="row">
		<div class="services--list--image col-xs-4 col-sm-5 col-md-5 col-lg-12">
			<div>
				<?php print $f1; ?>
			</div>
		</div>
		<div class="services--list--title col-xs-8 col-sm-7 col-md-7 col-lg-12">
			<h3><?php print $f2; ?></h3>
		</div>
	</div>
</div>