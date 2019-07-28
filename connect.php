<?php
  $connection = mysqli_connect('localhost', 'root', 'root');
  if (!$connection){
    die("Error connecting to database" . mysqli_error($connection));
  }
  $select_db = mysqli_select_db($connection, 'registration');
  if (!$select_db){
    die("Database selection failed" . mysqli_error($connection));
  }
?>
