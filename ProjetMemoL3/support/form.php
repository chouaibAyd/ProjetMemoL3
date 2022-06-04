<?php


 if(isset($_POST['sub'])) {
  $mail = mysqli_real_escape_string($conn, $_POST['adress']);
  $comm = mysqli_real_escape_string($conn, $_POST['comment']);
  $sql = "INSERT INTO support(email, comment)
  VALUES ('$mail', '$comm')";
   mysqli_query($conn, $sql);
     
 }