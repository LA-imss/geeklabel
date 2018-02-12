<div class="wrapper">

  <header id="header">
    <?php print render($page['header']); ?>
  </header>

    <main class="main">
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>

      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </main>

  <?php if (!empty($page['footer'])): ?>
    <footer id="footer">
        <?php print render($page['footer']); ?>
    </footer>
  <?php endif; ?>
</div>