<?php 
require_once('../../private/initialize.php'); 

$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
} 
elseif($test == '500') {
  error_500();
} 
elseif($test == 'redirect') {
  redirect_to(url_for('/salamanders/index.php'));
}
?>

<?php $page_title = 'Edit Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="edit salamander">
    <h1>Edit Salamander</h1>

    <form action="" method="post">
      <dl>
        <dt>Edit Name</dt>
        <dd><input type="text" name="salamander_name" value="" /></dd>
      </dl>
  
      <div id="Salamanders">
        <input type="Edit" value="Edit Salamander" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php');  ?>