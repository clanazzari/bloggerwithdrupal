<?php?>
<div class="node-content <?php if (!$page) { print 'node-responsive'; } else { print 'node-responsive-full'; } ?>">

  <h2><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>

  <div class="submitted">
    <?php print $submitted; ?>
  </div>

  <div class="content">
    <?php
    hide($content['comments']);
    hide($content['links']);
    print render($content);
    ?>

  </div>

</div>
