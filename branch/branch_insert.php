<?php

include('../inc/connection.php');

if(isset($_POST['branch'])) {
  $branch_name = $_POST['branch_name'];
  $check_dup = "SELECT * FROM branch where branch_name = '$branch_name'";
  $result = mysqli_query($conn, $check_dup);

  if(mysqli_num_rows($result) > 0){
    echo "dup";
     
  }
  else {
     $result = mysqli_query($conn, "INSERT INTO `branch`(`branch_id`, `branch_name`) VALUES ('','$branch_name')");
  if($result == true) {
    header("location:../index.php?success= Branch successfully Created");
   
  }else {
   header("location:../index.php?error = Something Wrong!");
  }
  }

}
?>