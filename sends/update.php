<?php
include('send_conn.php');

  $package = $_POST['package'];
  $sender = $_POST['sender'];
  $receiver = $_POST['receiver'];
  $passcode = $_POST['passcode'];
  $from = $_POST['from'];
  $pacto = $_POST['pacto'];
  $status = "Pending";
  $send_id = $_POST['send_id'];

  $query = "UPDATE `send_fill_form` SET `code_number`='$package',`sender_name`='$sender',`receiver_name`='$receiver',`pass_code`='$passcode',`package_from`='$from',`package_to`='$pacto' WHERE `send_id`='$send_id'";

  $result = mysqli_query($conn, $query);
  if($result==true) {
     header('location: ../index.php?success= Record successfully Updated');
  }
  else{
    echo"cow";
  }
?>