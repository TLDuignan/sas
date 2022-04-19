<?php require_once('../../private/initialize.php'); 

  $id = $_GET['id'] ?? '1'; 
  $page_title = 'Salamander Details';
  include(SHARED_PATH . '/salamander-header.php'); 

  $salamander = find_salamander_by_id($id);

  
?>

<h2>Salamander Details</h2>
<p> Page ID: <?= h($id); ?></p>

<div>
  <dl>
    <dt><strong>Name:</strong></dt>
    <dd><?php echo h($salamander['name']); ?></dd>
  </dl>
  <dl>
    <dt><strong>Habitat:</strong></dt>
     <dd><?php echo h($salamander['habitat']); ?></dd>
  </dl>
  <dl>
    <dt><strong>Description:</strong></dt>
    <dd><?php echo h($salamander['description']); ?></dd>
  </dl>
</div>


<p><a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamander List</a></p>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
