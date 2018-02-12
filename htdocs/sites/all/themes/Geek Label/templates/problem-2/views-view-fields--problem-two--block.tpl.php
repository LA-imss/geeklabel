<?php foreach ($fields as $id => $field): ?>
	<?php
	if($id=='field_problem_two_image'){$f1=$field->content;}
	if($id=='field_problem_two_description'){$f2=$field->content;}
	?>
<?php endforeach; ?>
<div class="row problem-two--image">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<?php print $f1; ?>
	</div>
</div>
<div class="row problem-two--description">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<?php print $f2; ?>
	</div>
</div>