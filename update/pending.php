<?php
include('../sends/send_conn.php');
if(isset($_GET['update'])) {
  $id= $_GET['update'];
  $query = "UPDATE send_fill_form SET Status='Approved' WHERE send_id= '$id'";
  $result = mysqli_query($conn, $query);
  if($result==true) {
    echo "NICE WOrk";
  }
}
?>