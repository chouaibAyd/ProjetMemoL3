<?php
include './Database/database.php';
include './support/form.php';
include './login/loginform.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/project.css" rel="stylesheet">
    
   
    <title>FutureGate</title>
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
              <li class="nav-item px-4"><a href="#services" class="nav-link">Services</a></li>
              <li class="nav-item px-4"><a href="#support" class="nav-link">Support</a></li>
              <li class="nav-item px-4"><a href="#about" class="nav-link">About us</a></li>
                <li class="nav-item px-4"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                  Join
                </button></li>
            </ul>
          
           </div>

        </div>

    </div>
  


    <!-------------------------- loginModal--------------------------- -->


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
          
          <form class="pt-3 needs-validation" action="" method="POST">
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="EmailL" placeholder="name@example.com" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="PasswordL" required>
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
        <button type="submit" class="btn btn-primary" name="login" >Login</button>
      </div>
    </div>
  </div>
</div>


</form>

    <!------------------------- choose ------------------------->
    <div class="modal fade" id="chooseModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logineModalLabel">Continue as !</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container" id="choose">
     
              <div class="row">

                <div class="col-sm-12 col-md-6"> 
                    <div class="card bg-dark text-light mb-3">
                        <div> 
                         <a href="./freelancerprofil.php" data-bs-toggle="modal"> <img src="./pics/worker.svg" height="250px" width="auto" alt=""  id="cardimg" class="card-img-top"> 
                        </div>
                         <div class="card-body text-center">
                          <h5 class="card-title text-light">Freelancer</h5> </a>
                          
                         </div>
                      </div> 
                  </div>
                  <div class="col-sm-12 col-md-6"> 
                    <div class="card bg-dark text-light mb-3">
                        <div> 
                         <a href="./clientprofil.php" data-bs-toggle="modal" > <img src="./pics/client.svg" height="250px" width="auto" alt=""  id="cardimg" class="card-img-top"> 
                        </div>
                         <div class="card-body text-center">
                          <h5 class="card-title text-light">Client</h5> </a>
                          
                          
                         </div>
                      </div> 
                  </div>


              </div>
    
    
    
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <!------------------------- HERO ------------------------->


   <section id="hero" class="bg-dark text-light text-center text-sm-start py-5">
      
     <div class="container">
          
        <div class="d-sm-flex align-items-center justify-items-center">

           <div class="py-3">
              <h1 class="display-6"><span class="text-info">Algerian</span> Freelancing platform</h1>
              <p class="py-1 lead">Find the best <span class="text-info">freelance services</span> with easy <span class="text-info">transactions </span>, simple <span class="text-info">dealing</span> , and comfortable <span class="text-info">surfing</span>.        

           </div>

           <img class="img-fluid w-50" src="./pics/homepageback.svg" alt="">

        </div>
     </div>

   </section>

<!------------------------- Services ------------------------->

<section id="services" class="py-5">

  <h1 class="text-center pb-5">Services</h1>
   
  <div class="container">

     <div class="row">

    <div class="col-sm-12 col-md-6 col-lg-4"> 
        <div class="card bg-dark text-light mb-3">
            <div> 
             <a href="" data-bs-toggle="modal" data-bs-target="#loginModal" > <img src="./pics/editiing.svg" width="354" height="257" alt=""  id="cardimg" class="card-img-top"> 
            </div>
             <div class="card-body text-center">
              <h5 class="card-title text-info">Editing</h5> </a>
              <p class="card-text">  Photos , Word document , Texts , Audio files , PDF files , Exel sheets  </p>
              <!--<a href="#" class="btn btn-info" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Join</a>-->
             </div>
          </div> 
      </div>


        <div class="col-sm-12 col-md-6 col-lg-4"> 
          <div class="card bg-dark text-light mb-3">
              <div>
                <a href="" data-bs-toggle="modal" data-bs-target="#loginModal"> <img  src="./pics/webdesign.svg" width="354" height="257"  alt="" id="cardimg" class="card-img-top">
              </div>
               <div class="card-body text-center">
                <h5 class="card-title text-info">Web development</h5> </a>
                <p class="card-text">Front-end , Back-end "html, CSS, JS, Bootstrap , PhP , ...."</p>
               <!--- <a href="#" class="btn btn-info" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Join</a>-->
               </div>
            </div> 
        </div>


        <div class="col-sm-12 col-md-6 col-lg-4"> 
          <div class="card bg-dark text-light mb-3">
              <div>
                <a href="" data-bs-toggle="modal" data-bs-target="#loginModal"> <img  src="./pics/programming.svg" width="354" height="257" alt="" id="cardimg" class="card-img-top">
              </div>
               <div class="card-body text-center">
                <h5 class="card-title text-info">Programming</h5> </a>
                <p class="card-text">Fixing bugs , Games , Applications , Web Applications , Maths problems, ....</p>
                <!--<a href="#" class="btn btn-info" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Join</a>-->
               </div>
            </div> 
        </div>
    

        <div class="col-sm-12 col-md-6 col-lg-4"> 
          <div class="card bg-dark text-light mb-3">
              <div>
                <a href="" data-bs-toggle="modal" data-bs-target="#loginModal"> <img  src="./pics/logo.svg" width="354" height="257" alt="" id="cardimg" class="card-img-top">
              </div>
               <div class="card-body text-center">
                <h5 class="card-title text-info">Logo design</h5> </a>
                <p class="card-text">Personal logos , Logo improvement , Animated Logos , Thumbnails , ...</a></p>
                <!--<a href="#" class="btn btn-info" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Join</a>-->
               </div>
            </div> 
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4"> 
          <div class="card bg-dark text-light mb-3">
              <div>
                <a href="" data-bs-toggle="modal" data-bs-target="#loginModal"> <img  src="./pics/trans.svg" width="354" height="257" alt="" id="cardimg" class="card-img-top">
              </div>
               <div class="card-body text-center">
                <h5 class="card-title text-info">Translation</h5> </a>
                <p class="card-text">Arabic , English , Franch , Espagnol , Russian , Turkish , Japanese , ...</p>
               <!--- <a href="#" class="btn btn-info" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Join</a>-->
               </div>
            </div> 
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4"> 
          <div class="card bg-dark text-light mb-3">
              <div>
                <a href="" data-bs-toggle="modal" data-bs-target="#loginModal">  <img  src="./pics/montage.svg" width="354" height="257" alt="" id="cardimg" class="card-img-top">
              </div>
               <div class="card-body text-center">
                <h5 class="card-title text-info">Montage</h5> </a>
                <p class="card-text">Videos editing , Cenematic Videos , Cuting , Minimizing , Youtube Videos , Films , ... </p>
                <!--<a href="#" class="btn btn-info" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Join</a>-->
               </div>
            </div> 
        </div>


     </div>

  </div>

</section>



   <!----------------------------Support--------------------------------->

   <section id="support" class="bg-dark text-light py-5">
    <div class="container">
     <div class="row align-items-center justify-content-center">
   
         <div class="col-md">
             <img src="./pics/support.svg" alt="" class="img-fluid">
         </div>
   
         <div class="col-md py-5"> <h1 class="pb-3"> Support</h1>

         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="adress" placeholder="name@example.com" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Add a comment</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3" required></textarea>
          </div>
          
          <button type="submit" name="sub" class="btn btn-primary">Send</button>
      </form>
       </div>
     </div>
    </div>
   
   </section>

   <!----------------------------About us--------------------------------->

<section id="about" class="py-5">
  <div class="container">
   <div class="row align-items-center justify-content-center flex-row-reverse">
 
       <div class="col-md">
           <img src="./pics/about.svg" alt="" class="img-fluid">
       </div>
 
       <div class="col-md py-5"> <h1 class="text-dark  pb-3"> About us</h1>
         <h5 class="py-1 ">This site created specialy for the <span class="text-primary">algerians indipandent workers</span> </h5>
         
         <ul>
         <li class=" py-1">Free services , with 0% expenses</li>
         <li class=" py-1">Open paiments </li>
         <li class=" py-1">Easy deal with costumers , with any contact method you like</li>
          <li class=" py-1">Open currency use</li>
          <li class=" py-1">Safe surfing </li>
 
         </ul>
     
     </div>
   </div>
  </div>
 
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




















<!-------------------------------------boostrap js ------------------------------------------>

    <script src="./js/popper.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.js"></script>


</body>
</html>