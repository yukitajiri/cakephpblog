<?php  // debug($post) ?>
<h2><?php echo h($post['Post']['title']) ?></h2>

<p><small>投稿日時: <?php echo $post['Post']['created'] ?></small></p>

<p><?php echo h($post['Post']['body']) ?></p>