<?php

include('send_conn.php');

if(isset($_POST['send_package'])) {

  $package = $_POST['package'];
  $sender = $_POST['sender'];
  $receiver = $_POST['receiver'];
  $passcode = $_POST['passcode'];
  $from = $_POST['from'];
  $pacto = $_POST['pacto'];

  $query = mysqli_query($conn, "INSERT INTO `send_fill_form`(`send_id`, `code_number`, `sender_name`, `receiver_name`, `pass_code`, `package_from`, `package_to`) VALUES ('','$package','$sender','$receiver','$passcode','$from','$pacto')");
  if($query){
    header('location: ../index.php?success= Package successfully Sent');
  }

}
?>