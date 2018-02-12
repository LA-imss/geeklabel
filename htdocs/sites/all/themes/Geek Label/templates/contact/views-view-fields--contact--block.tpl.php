<?php foreach ($fields as $id => $field): ?>
	<?php
	if($id=='webform_form_body'){$f1=$field->content;}
	if($id=='field_site_phone_string'){$f2=$field->content;}
	if($id=='field_site_phone'){$f3=$field->content;}
	if($id=='field_site_email'){$f4=$field->content;}
	?>
<?php endforeach; ?>
<?php if (!empty($f1)): ?>
	<div class="row contact--webform">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="">
				<?php print $f1; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if (!empty($f2)): ?>
	<div class="row contact--phone-string">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-md hidden-sm hidden-xs">
			<div class="">
				<?php print $f2; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if (!empty($f3)): ?>
	<div class="row contact--phone">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-lg">
			<div class="">
				<?php print $f3; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if (!empty($f4)): ?>
	<div class="row contact--email">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hidden-lg">
			<div class="">
				<?php print $f4; ?>
			</div>
		</div>
	</div>
<?php endif; ?>