<?php
include('send_conn.php');

if(isset($_GET['delete'])){
  $id= $_GET['delete'];
  $query = "DELETE FROM `send_fill_form` WHERE send_id =$id ";
  $result = mysqli_query($conn,$query);
  if($result == true){
    header('location: ../index.php?success= Data successfully deleted');
  }
  else{
    echo "Something went wrong";
  }
}
?>