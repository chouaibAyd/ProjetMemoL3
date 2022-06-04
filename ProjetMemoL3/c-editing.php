<?php

include './Database/database.php';
include './client/form.php';




$sql = 'SELECT * FROM announcement WHERE service = "Editing"';
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
    <title id="headTitle">Editing</title>
    
  </head>
  <body>
    
<!---------------------------NAVBAR--------------------------------->



<div class="navbar navbar-expand-sm bg-dark navbar-dark text-white fixed-top">
        <div class="container">
           <a href="./C-home.php" class="navbar-brand">FutureGate</a>

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
        <h1 class="fw-light"  name="domaine">Editing</h1>
        <p class="lead text-muted"  name="serviceDetailles">Photos , Word document , Texts , Audio files , PDF files , Exel sheets...</p>
        <p>
            <a type="button"  href="" class="btn btn-success my-2" name="postDemande" data-bs-toggle="modal" data-bs-target="#postModal">Post an announcement</a>
            <a type="button"  href="./W-editing.php" class="btn btn-primary my-2" >Find a freelancer</a>
           
          </p>
      </div>
    </div>
  </section>


  <!-------------------------------------->
  <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="postModalLabel">Describe your demande !
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="container">

        

          <form action="c-editing.php" method="POST">

<div class="col-md-3 pb-4">
    
    <select class="form-select" name="service"  required>
    <option selected disabled value="">Choose...</option>
      <option>Editing</option>
      
    </select>
    
    </div>

        <div class="input-group mb-3">
  
  <input type="text" name="title"  class="form-control" placeholder="Title" aria-label="title" aria-describedby="basic-addon1" required>
</div>



<div class="input-group pb-4">
  <span class="input-group-text">Describe your demande</span>
  <textarea name="info" class="form-control" aria-label="Describe your demande" required></textarea>
</div>

<div class="input-group mb-3">
<span class="input-group-text">Finale date</span>
  <input type="date" name="date" class="form-control"  aria-label="date" aria-describedby="basic-addon1" required>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="text" name="budget" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="max budget" required>
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
    
            <div class="card-body">
            <h4 class="card-title text-center text-dark"><?php echo htmlspecialchars($user['titre']) ; ?></h4>
              <ul class="list-group list-group-flush">
    <li class="list-group-item"><h6 class="text-secondary">Discription </h6><?php echo htmlspecialchars($user['infos']); ?></li>
    <li class="list-group-item"><h6 class="text-secondary">Budget </h6><?php echo htmlspecialchars($user['budget']) . ' $'; ?></li>
    <li class="list-group-item"><h6 class="text-secondary">Final date </h6><?php echo htmlspecialchars($user['Date']); ?></li>
    <li class="list-group-item"><h6 class="text-secondary">Contact </h6><?php echo htmlspecialchars($user['contact']) ; ?></li>
              </ul>
              
            </div>
           
          </div>
        </div>
        <?php endforeach; ?>
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