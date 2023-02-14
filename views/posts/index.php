<?php
  include_once('./views/layouts/navbar.php');
?>

<?php
echo '<ul>';
foreach ($posts as $post) {
  echo '<li>
    <a href="index.php?controller=posts&action=showPost&id=' . $post->id . '">' . $post->title . '</a>
  </li>';
}
echo '</ul>';
?>

<?php
  include_once('./views/layouts/footer.php');
?>