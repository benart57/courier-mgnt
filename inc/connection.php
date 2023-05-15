<?php
$conn= mysqli_connect('localhost', 'root', '', 'courier_mng');
if(!$conn) {
  die('fail to connect'.mysqli_error());
}
?>