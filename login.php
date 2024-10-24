<?php 
    session_start();
  echo  $_SESSION['user_name'];
  echo  $_SESSION['number'] ;
  echo  $_SESSION['email'];
  echo $_SESSION['user_id'];

  foreach($_SESSION['cart'] as $key=>$item) {
    $product_id = $item['product_id'];
    echo $product_id;
  }
?>