<?php?>
<div class="header-wrapper">
  <div class="header">
    <?php if ($logo): ?>
      <img class="header-logo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    <?php endif; ?>
  </div>
</div>

<div class="content-wrapper">
  <div class="content">
    <?php print render($page['content']); ?>
    <?php if (!$is_front): ?>
    <h2><a href="<?php print $base_path ?>">Voltar<a></h2>
    <?php endif; ?>
  </div>
</div>

<?php print $feed_icons; ?>

<div class="footer-wrapper">
  <div class="footer">
    <?php print render($page['footer']); ?>
  <?php if (!$logged_in): ?><a href="?q=user/login">(Login)</a><?php endif ?>
  </div>
</div>
