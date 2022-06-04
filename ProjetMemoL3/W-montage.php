<?php

include './Database/database.php';
include './freelancer/form.php';

$sql = 'SELECT * FROM work WHERE service = "Montage"';
$results = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($results, MYSQLI_ASSOC);


mysqli_free_result($results);
mysqli_close($conn);







?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <title id="headTitle">Freelancers</title>
    
  </head>
  <body>
    
<!---------------------------NAVBAR--------------------------------->



<div class="navbar navbar-expand-sm bg-dark navbar-dark text-white fixed-top">
        <div class="container">
           <a href="#" class="navbar-brand">FutureGate</a>

          <button 
          class="navbar-toggler" 
          type="button" 
          data-bs-toggle="collapse" 
          data-bs-target="#mainmenu">
          <span class="navbar-toggler-icon"></span>
         </button>

           <div class="collapse navbar-collapse"  id="mainmenu">
                      
           <ul class="navbar-nav ms-auto">
              
              <li class="nav-item px-4"><a href="./homepage.php" class="nav-link text-danger">
                  Logout
               </a></li>
            </ul>
          
           </div>

        </div>

    </div>
  

<!--------------------------------------------------->



  <section class="py-4 text-center container" >
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"  name="domaine">Montage</h1>
        <p class="lead text-muted"  name="serviceDetailles">Videos editing , Cenematic Videos , Cuting , Minimizing , Youtube Videos , Films , ...</p>
        <p>
            <a type="button"  href="./C-montage.php" class="btn btn-success my-2" >Back to announcements</a>
            
           
          </p>
      </div>
    </div>
  </section>


  
<!------------------------------------------------------>
<div class="album py-5 bg-light">
    <div class="container ">

      <div class="row">
<?php foreach($users as $user): ?>
        <div class="col-lg-6 mb-5">
        
          <div class="card shadow-sm">
          <img src="./pics/montage.svg" width="100%" height="225">
            <div class="card-body">
            <h4 class="card-title text-center text-dark"><?php echo htmlspecialchars($user['title']) ; ?></h4>
              <ul class="list-group list-group-flush">
    <li class="list-group-item"><h6 class="text-secondary">Self discription </h6><?php echo htmlspecialchars($user['infos']); ?></li>
    <li class="list-group-item"><h6 class="text-secondary">Average duration </h6><?php echo htmlspecialchars($user['duration']) . ' Hour'; ?></li>
    <li class="list-group-item"><h6 class="text-secondary">Average Budget </h6><?php echo htmlspecialchars($user['budget']) . ' $'; ?></li>
    <li class="list-group-item"><h6 class="text-secondary">Contact </h6><?php echo htmlspecialchars($user['contact']) ; ?></li>
  </ul>
              
            </div>
           
          </div>
        </div><?php endforeach; ?>
</div> 

</div>
</div>


<!------------------------------------------------------>






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


<!----->
<script src="./js/bootstrap.js"></script>
  </body>
</html>