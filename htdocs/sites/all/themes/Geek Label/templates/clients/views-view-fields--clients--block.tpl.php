<?php foreach ($fields as $id => $field): ?>
	<?php
	if($id=='field_client_logo'){$f1=$field->content;}
	?>
<?php endforeach; ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 text-center">
	<div class="clients--list--logo">
		<?php print $f1; ?>
	</div>
</div>