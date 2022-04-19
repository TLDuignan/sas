<?php 
  require_once('../../private/initialize.php'); 

  if (is_post_request()) {
      $salamanderName = $_POST['salamanderName'];
      echo "Salamander Name: $salamanderName";
  } else {
    // redirect_to(url_for('/salamanders/new.php'));
  }

  $pageTitle = "Create";
  include (SHARED_PATH . '/salamander-header.php');
?>
<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Create Salamander</h1>

<form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
  <label for="name">Name</label><br>
  <input type="text" name="name"/><br>

  <label for="habitat">Habitat:</label><br>
  <textarea name="habitat"></textarea><br>

  <label for="description">Description:</label><br>
  <textarea name="description"></textarea><br>

  <input type="submit" value="Create Salamander"/>
</form>

<?php include (SHARED_PATH . '/salamander-footer.php'); ?>