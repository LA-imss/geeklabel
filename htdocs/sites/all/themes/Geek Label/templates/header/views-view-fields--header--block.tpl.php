<?php foreach ($fields as $id => $field): ?>
  <?php
  if($id=='field_site_logo'){$f1=$field->content;}
  if($id=='field_site_slogan'){$f2=$field->content;}
  ?>
<?php endforeach; ?>
<div class="row header--logo">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
	  <?php print $f1; ?>
	</div>
</div>
<div class="row header--slogan">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3 text-center">
	  <h1><?php print $f2; ?></h1>
	</div>
</div>