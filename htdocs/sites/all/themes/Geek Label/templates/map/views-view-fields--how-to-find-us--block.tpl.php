<?php foreach ($fields as $id => $field): ?>
	<?php
	if($id=='webform_form_body'){$f1=$field->content;}
	?>
<?php endforeach; ?>

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div id="map" class="map">
				<?php print $f1; ?>
			</div>
		</div>
	</div>
