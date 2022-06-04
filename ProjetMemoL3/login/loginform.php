<?php
include './Database/database.php';
session_start();


if(isset($_POST['login'])){
  $email = $_POST['EmailL'];
  $password = $_POST['PasswordL'];
    
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
  $result = mysqli_query($conn, $sql);
  
  
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
  
    $_SESSION['id'] = $row['id'];
         $_SESSION['email'] = $row['email'];
         header('Location: C-home.php'.$_SESSION['id']);

    if($row['type'] == 'Client'){
  
         $_SESSION['id'] = $row['id'];
         $_SESSION['email'] = $row['email'];
         header('Location: C-home.php');
  
    }elseif($row['type'] == 'Freelancer'){
         $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        header('location: F-home.php');
    }
  
  }else{
    echo '<div class="alert alert-danger text-center mt-2" role="alert">
 Incorrect email or password!
</div>';
  }
  
  
  }