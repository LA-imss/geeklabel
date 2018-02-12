<!DOCTYPE html>
<html>
  <head>
    <link rel="profile" href="<?php print $grddl_profile; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
  <script src="sites/all/themes/Geek Label/js/map.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQrzhpSjJmKHdn7Xhlk-aoLg1gaH-xMxM&callback=initMap"></script>
  <script src="sites/all/themes/Geek Label/js/vh-slider.js"></script>
</html>