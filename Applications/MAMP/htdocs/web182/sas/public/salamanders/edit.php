
<?php 
  require_once('../../private/initialize.php'); 
  
  if (!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/index.php'));
  }

  $id = $_GET['id'];

  
  if (is_post_request()) {
    $salamander = [];
    $salamander['id'] = $id;
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'] ?? '';
    
    $result = update_salamander($salamander);
    if($result === true) {
      redirect_to(url_for('/salamanders/show.php?id=' . $id));
    }
    else {
      $errors = $result;
      //var_dump($errors); exit();
    }
  }
  
  else {
    $salamander = find_salamander_by_id($id);
  }
  
  $pageTitle = "Edit";
  include (SHARED_PATH . '/salamander-header.php');
?>

<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

<div>
  <h1>Edit Salamander</h1>

  <?php echo display_errors($errors); ?>

  <form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
    <label for="name">Name:</label><br>
    <input type="text" name="name" value="<?php echo h($salamander['name']);  ?>"/><br>

    <label for="habitat" rows="4" cols="50">Habitat:</label><br>
    <textarea name="habitat"><?php echo h($salamander['habitat']);  ?></textarea><br>
      
    <label for="description" rows="4" cols="50">Description:</label><br>
    <textarea name="description"> <?php echo h($salamander['description']);  ?></textarea><br>

    <input type="submit" value="Edit Salamander"/>
  </form>
</div>


<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
