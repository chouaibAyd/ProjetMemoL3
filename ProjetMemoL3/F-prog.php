<?php

include './Database/database.php';
include './freelancer/form.php';



$sql = 'SELECT * FROM work WHERE service = "Programming"';
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
    <title id="headTitle">Programming</title>
    
  </head>
  <body>
    
<!---------------------------NAVBAR--------------------------------->



<div class="navbar navbar-expand-sm bg-dark navbar-dark text-white fixed-top">
        <div class="container">
           <a href="./F-home.php" class="navbar-brand">FutureGate</a>

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
        <h1 class="fw-light"  name="domaine">Programming</h1>
        <p class="lead text-muted"  name="serviceDetailles">Fixing bugs , Games , Applications , Web Applications , Maths problems, ....</p>
        <p>
            <a type="button"  href="" class="btn btn-success my-2" name="postDemande" data-bs-toggle="modal" data-bs-target="#postModal">Post a description</a>
            <a type="button"  href="./A-prog.php" class="btn btn-primary my-2">View client's announcements</a>
           
          </p>
      </div>
    </div>
  </section>


  <!-------------------------------------->
  <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postModalLabel">Describe yourself !
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="container">

        

          <form action="F-prog.php" method="POST" >

          <div class="col-md-3 pb-4">
    
    <select class="form-select" name="service"  required>
    <option selected disabled value="">Choose...</option>
      <option>Programming</option>
      
    </select>
    
    </div>
        <div class="input-group mb-3">
  
  <input type="text" name="title"  class="form-control" placeholder="Your name" aria-label="title" aria-describedby="basic-addon1" required>
</div>

<div class="input-group pb-4">
  <span class="input-group-text">Describe your work</span>
  <textarea name="info" class="form-control" aria-label="Describe your work" required></textarea>
</div>

<div class="input-group mb-3">
<span class="input-group-text">Average Duration</span>
  <input type="text" name="date" class="form-control"  aria-label="duration" aria-describedby="basic-addon1" required>
  <span class="input-group-text">Hour</span>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="text" name="budget" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Average budget" required>
  <span class="input-group-text">.00</span>
</div>

<div class="input-group mb-3">
  
  <input type="email" name="contact" class="form-control" placeholder="Contact mail" aria-label="email" aria-describedby="basic-addon1" required>
</div>
          
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary" >POST</button>
      </div>
      
      </form>
    </div>
    </div>
    </div>
</div>
</div>

<!------------------------------------------------------>




<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
<?php foreach($users as $user): ?>
        <div class="col-lg-6 mb-5">
        
          <div class="card shadow-sm">
    <img src="./pics/programming.svg" width="100%" height="225">
            <div class="card-body">
            <h4 class="card-title text-center text-dark"><?php echo htmlspecialchars($user['title']) ; ?></h4>
              <ul class="list-group list-group-flush">
    <li class="list-group-item"><h6 class="text-secondary">Self description </h6><?php echo htmlspecialchars($user['infos']); ?></li>
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