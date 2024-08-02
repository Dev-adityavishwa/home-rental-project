<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Rental Management System</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/externalcss.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.bundle.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>    
     <!-- Body Start-->
    <div class="container-fluid">
      <div class="row sticky-top">
      
        
        <div class="col-sm-12 p-0  websitecolor">
            <nav class="navbar navbar-expand-lg shadow-sm navbar-dark">
                <div class="container-fluid">
                    <span class=" fw-bold d-sm-block d-none fs-2"><b id="rentitquick">Rentitquick</b>.com</span>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="home.php"><span>HOME</span></a> 
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active fw-bold" href="aboutus.php"><span>ABOUT US</span></a>
                      </li>
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         <span>REGISTRATION</span> 
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item fw-bold" href="renterregistration.php"><span>RENTER REGISTRATION</span></a></li>
                          <li><a class="dropdown-item fw-bold" href="ownerregistration.php"><span>OWNER REGISTRATION</span></a></li>
                          
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         <span>LOGIN</span> 
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item fw-bold" href="rentarlogin.php"><span>RENTER LOGIN</span></a></li>
                          <li><a class="dropdown-item fw-bold" href="ownerlogin.php"><span>OWNER LOGIN</span></a></li>
                          
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active fw-bold" href="changepassword.php"><span>CHANGE PASSWORD</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active fw-bold" href="contactus.php"> <span>CONTACT US</span></a>
                      </li> 
              
                      <li class="nav-item">
                        <a class="nav-link active fw-bold" href="gallery.php"> <span>GALLERY</span></a>
                      </li>                            
                    </ul>
                
                  </div>
                </div>
              </nav> 
        </div>
    </div>
    <!-- Navbar colosed -->
        <!--*********************************-->  
      <div class="row mt-4" >
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
        <font size="5"><ul>
            <li> We are working towards making the lives easier.</li>
            <li>We provide the most exotic yet affordable locations so that you can enjoy yourself and still be soft on the budget.</li>
        <li>We are here to make the renting process easy, as was never before.</li>
        
       <li> We make it easier to directly contact the owner's so that  the renting side could negotiate on there terms.</li>
       <li> We understand the value of time thus our process are really clear and very easy so that you get what your desire in no time.We provide almost paperless processing so that the renting process should be easier.</li>
       <li> HOUSES are the starting,more features COMING SOON.</li><br/><br/>
       
       
       
    </ul></font>
        </div>
        <div class="col-sm-1"></div>
      </div>
   <!-- ******************************************-->
    <div class="row websitecolor">
      <div class="row">
          <!-- footer start  -->
          <div class="col-sm-5">

          </div>
       <div class="col-sm-2">
        <img src="image/logo1.png" class="img-fluid w-100" alt="IMAGE NOT FOUND">
       </div>
       <div class="col-sm-5"> </div>
        </div>
      <div class="row">
        <div class="col-sm-12 footer ">Home Rental Management System</div>
      </div>
      <div class="row" id="footermiddle">
        <div class="col-sm-2"></div>
        <div class="col-sm-2"><a href="home.php">HOME</a></div>
        <div class="col-sm-2"><a href="aboutus.php">ABOUT US</a></div>

        <div class="col-sm-2"><a href="gallery.php">GALLERY</a></div>
        <div class="col-sm-2"><a href="contactus.php">CONTACT US</a></div>
        <div class="col-sm-2"></div>
      </div>
      <div class="row footer1">
        <div class="col-sm-6 my-3"> Copyright &copy; | All Right Reserved
        </div>
        <div class="col-sm-6 my-2">
          <a href="#" target="_blank"><i class="bi bi-twitter p-2 rounded-circle  btn btn-outline-primary"></i></a>
          <a href="#" target="_blank"><i class="bi bi-facebook p-2 rounded-circle btn btn-outline-primary" ></i></a>
          <a href="#" target="_blank"><i class="bi bi-instagram p-2 rounded-circle btn btn-outline-primary"></i></a>
          <a href="#" target="_blank"><i class="bi bi-whatsapp p-2 rounded-circle btn btn-outline-primary"></i></a>
        </div>
      </div>
         <!-- footer closed  -->
        </div>
  <!-- body end -->
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      delay: 100,
      duration:1000,
      offset: 200, 
    });
  </script>
</body>
</html>