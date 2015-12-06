<?php
  require 'cartclass.php';
  session_start();
  $id=array_key_exists('id',$_GET)?$_GET['id']:NULL;
  $all=array_key_exists('all',$_GET)?$_GET['all']:NULL;
  $shopcart=NULL;
  if ($all=="yes") {
  	// delete everything from cart (replace cart with new one)
  	$shopcart=new Shopcart();
  } else {
	  if (isset($_SESSION['cart'])) {
	  	// delete item from cart
	  	$shopcart=unserialize($_SESSION['cart']);
	  	$shopcart->delete($id);
	  }
  }
  if ($shopcart) {
  	$_SESSION['cart']=serialize($shopcart);
  }
  header("Location: cart.php");
?>
