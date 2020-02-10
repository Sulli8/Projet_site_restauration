<?php
session_start();
session_destroy();
if(empty($_SESSION)){
  header("Location:index.php");
}
 ?>
