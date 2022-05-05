<?php 
  require_once('../../private/initialize.php'); 

  
  if(is_post_request()) {

    $salamander = [];
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';

    $result = insert_salamander($salamander);
    if($result === true) {
      $new_id = mysqli_insert_id($db);
      redirect_to(url_for('salamanders/show.php?id=' . $new_id));
    }
    else {
      $errors = $result;
    }
  }
  else {
   //display blank form
  }

  $pageTitle = "Create";
  include (SHARED_PATH . '/salamander-header.php');
?>

<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

<div>
  <h1>Create Salamander</h1>

  <?php echo display_errors($errors); ?>

  <form action="<?= url_for('/salamanders/new.php'); ?>" method="post">
    <label for="name">Name</label><br>
    <input type="text" name="name"/><br>

    <label for="habitat">Habitat:</label><br>
    <textarea name="habitat"></textarea><br>

    <label for="description">Description:</label><br>
    <textarea name="description"></textarea><br>

    <input type="submit" value="Create Salamander"/>
  </form>
</div>

<?php include (SHARED_PATH . '/salamander-footer.php'); ?>