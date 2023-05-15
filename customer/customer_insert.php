<?php

include('../inc/connection.php');

if(isset($_POST['customer'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $phone = $_POST['phone'];
  
  $result = mysqli_query($conn, "INSERT INTO `customer`(`customer_id`, `firstname`, `lastname`, `phone`) VALUES ('','$first_name','$last_name','$phone')");
  if($result == true) {
    header("location: ../index.php?success= customer successfully Created");
   
  }else {
   header("location: ../index.php?error = Something Wrong!");
  }

}
?>