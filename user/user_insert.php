<?php

include('../inc/connection.php');

if(isset($_POST['user_name'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = mysqli_query($conn, "INSERT INTO `user`(`user_id`, `firstname`, `lastname`, `username`, `password`) VALUES ('','$first_name','$last_name','$username','$password')");
  if($result == true) {
    header("location:../index.php?success= User successfully Created");
   
  }else {
   header("location:../index.php?error = Something Wrong!");
  }

}
?>