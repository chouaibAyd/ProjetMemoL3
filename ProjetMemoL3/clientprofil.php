<?php
include './Database/database.php';
include './login/loginform.php';

if(isset($_POST['Submit'])){
  $firstname = $_POST['Firstname'];  
  $type = $_POST['type'];  

$lastname = $_POST['Lastname'];
$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$confpassword = $_POST['Confirmepassword'];


$checkuser = "SELECT * FROM user WHERE username = '$username'";
$result1 = mysqli_query($conn,$checkuser);
$count1 = mysqli_num_rows($result1);


$checkmail = "SELECT * FROM user WHERE email = '$email'";
$result2 = mysqli_query($conn,$checkmail);
$count2 = mysqli_num_rows($result2);

if($count1>0){
  echo '<div class="alert alert-danger text-center mt-2" role="alert">
  Username already taken!
</div>';  

}else
if($count2>0){
  echo '<div class="alert alert-danger text-center mt-2" role="alert">
  This email alredy exist!
</div>';

}else

  if($password != $confpassword){

 echo '<div class="alert alert-danger text-center mt-2" role="alert">
 Password comfirmation is wrong!
</div>';

}else{
  $sql = "INSERT INTO user(firstname, lastname, username, email, password, type)
  VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$type')";
 mysqli_query($conn, $sql);
 header('location: C-home.php');

}
}
 
  








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/project.css" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./tst.php" rel="stylesheet">
    <title>Register client</title>
</head>

<body>


    <!---------------------------NAVBAR--------------------------------->


    <div class="navbar navbar-expand-sm bg-dark navbar-dark text-white fixed-top">
        <div class="container">
           <a href="./homepage.php" class="navbar-brand">FutureGate</a>

          <button 
          class="navbar-toggler" 
          type="button" 
          data-bs-toggle="collapse" 
          data-bs-target="#mainmenu">
          <span class="navbar-toggler-icon"></span>
         </button>

           <div class="collapse navbar-collapse"  id="mainmenu">
                      
            <ul class="navbar-nav ms-auto">
              <li class="nav-item px-4"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                Join
              </button></li>        
            </ul>
           </div>
        </div>
    </div>


    <!-------------------------- loginModal----------------------------->


<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logineModalLabel">You've to Login first !</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">

          <img src="./pics/login.svg" width="354" height="257" class="img-fluid" alt="">
          
          <form class="pt-3 needs-validation" method="POST">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="name@example.com" name="EmailL" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3"  class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="PasswordL" class="form-control" id="inputPassword3" required>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Remember me
                  </label>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#chooseModal">Register</button>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
      </div>
    </div>
  </div>
</div>
</form>

<!------------------------register-------------------------->


<section class=" text-dark py-4 mb-3">
  <div class="col-md py-5 text-center"> <h1> Register</h1></div>

<form  action="" method="POST" class="row g-3" id="reg" >
  <div class="col-lg-6">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="Firstname" name="Firstname"   required>
  </div>
  <div class="col-lg-6">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="Lastname" name="Lastname"   required>
  </div>
  <div class="col-lg-6">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="Username" name="Username"  aria-describedby="inputGroupPrepend2"   required>
    </div>
  </div>
  <div class="col-lg-6">
    <label for="validationDefault03" class="form-label">Email</label>
    <input type="email" class="form-control"  id="Email" name="Email" required>
  </div>
  <div class="col-lg-6">
    <label for="validationDefault05" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="Password"  required>
    <div id="emailexist" class="form-text error text-warning" >  </div>
  </div>
  <div class="col-lg-6">
    <label for="validationDefault05" class="form-label">Confirme password</label>
    <input type="password" class="form-control" id="Confirmepassword" name="Confirmepassword" required>
    <div id="passcomf" class="form-text error text-warning" >  </div>
  </div>
  <div class="col-md-3 pb-4">
    
    <select class="form-select" name="type"  required>
    <option selected disabled value="">Choose...</option>
      <option>Client</option>
      
    </select>
    
    </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit" id="Submit" name="Submit">Submit</button>
  </div>
</form>
</section>
  
<!------------------------------------- footer ------------------------------------------>

<footer class="py-5 bg-dark text-white text-center">
 
    <div class="container">
     
       <p class="lead">
         Copyright &copy; 2021-2022 Ayada Chouaib Mohamed Ali
       </p>
  
       <a href="#" class="">
         <img src="./pics/up-arrow.png" width="50px" height="50px" alt="">
       </a>
  
    </div>  
  </footer>
  
  







    <!----------------------------------------->
    
    <script src="./js/bootstrap.js"></script>
    <!----------------------------------------->

</body>
</html>

