<?php

include './Database/database.php';

$sql = 'SELECT * FROM support';
$results = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($results, MYSQLI_ASSOC);


mysqli_free_result($results);
mysqli_close($conn);



  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Support</title>
</head>
<body>
<!---------------------------NAVBAR--------------------------------->



<div class="navbar navbar-expand-sm bg-dark navbar-dark text-white ">
        <div class="container">
           <a href="#" class="navbar-brand">FutureGate</a>

          <button 
          class="navbar-toggler" 
          type="button" 
          data-bs-toggle="collapse" 
          data-bs-target="#mainmenu">
          <span class="navbar-toggler-icon"></span>
         </button>

        </div>

    </div>

<!------------------------------------------>
<div class="h3 dark text-center pt-5">Support</div>
<!------------------------------------------>
<div class="container mb-5" >

  <div class="row">
      <?php foreach($users as $user): ?>
        <div class="col-sm-6">
    <div class="card mt-5">
  <h5 class="card-header"><?php echo htmlspecialchars($user['id']) ; ?></h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo htmlspecialchars($user['email']) ; ?></h5>
    <p class="card-text"><?php echo  htmlspecialchars($user['comment']) ; ?> </p>
    <a href="#" type="submit" name="done" class="btn btn-primary">Done</a>
  </div>
</div>
</div>
<?php endforeach; ?>
</div>

</div>

<!------------------------------------- footer ------------------------------------------>

<footer class="py-5 bg-dark text-white text-center">
 
  <div class="container">
   
     <p class="lead">
       Copyright &copy; 2021-2022 Ayada Chouaib Mohamed Ali
     </p>

     <a href="#" class="">
       <img src="pics/up-arrow.png" width="50px" height="50px" alt="">
     </a>

  </div>




  
</footer>


    <script src="./js/bootstrap.js"></script>
</body>
</html>