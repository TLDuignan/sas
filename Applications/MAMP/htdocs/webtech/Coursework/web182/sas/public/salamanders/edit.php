<?php 
require_once('../../private/initialize.php'); 

if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/edit.php'));
}

$id = $_GET['id'];

if(is_post_request()){
  $salamander_name = $_POST['salamander_name'] ?? '';
  echo "Salamander Name: " . $salamander_name . "<br />";
}

?>

<?php $page_title = 'Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="edit salamander">
    <h1>Edit Salamander</h1>

    <form action="<?php echo url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="salamander_name" value="" /></dd>
      </dl>
  
      <div id="Salamanders">
        <input type="submit" value="Edit Salamander" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php');  ?>