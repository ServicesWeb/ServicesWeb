<?php
  $user = 'root';
  $password = 'root';
  $db = 'group3';
  $host = 'localhost';

  $mysqli = mysqli_init();
  $mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 2);
  $mysqli->real_connect($host, $user, $password, $db);

  if(mysqli_connect_errno())
  {
    echo mysqli_connect_error();
  }
?>
