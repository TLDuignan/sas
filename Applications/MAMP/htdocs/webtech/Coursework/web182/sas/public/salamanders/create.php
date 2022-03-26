<?php

  require_once('../../private/initialize.php');

  if(is_post_request()){
    $salamander_name = $_POST['salamander_name'] ?? '';
    echo "Salamander Name: " . $salamander_name . "<br />";
  }
  else {
    redirect_to(url_for('/salamanders/new.php'));
  }

?>