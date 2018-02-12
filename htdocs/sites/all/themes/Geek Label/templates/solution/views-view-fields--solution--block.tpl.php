<?php foreach ($fields as $id => $field): ?>
	<?php
	if($id=='field_solution_image'){$f1=$field->content;}
	if($id=='field_solution_description'){$f2=$field->content;}
	?>
<?php endforeach; ?>
<div class="row solution--image">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php print $f1; ?>
	</div>
</div>
<div class="row solution--description">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<?php print $f2; ?>
	</div>
</div>