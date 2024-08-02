
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
      
        
        <div class="col-sm-12 p-0 websitecolor">
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
                          <li><a class="dropdown-item fw-bold" href="renterlogin.php"><span>RENTER LOGIN</span></a></li>
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
    <div class="row">
        <!-- slider start -->
    
        <div class="col-sm-12 mt-2">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/s1.jpeg" class="d-block w-100  img-fluid" alt="IMAGE NOT FOUND">
              </div>
              <div class="carousel-item">
                <img src="image/s2.jpeg" class="d-block w-100  img-fluid" alt="IMAGE NOT FOUND">
              </div>
              <div class="carousel-item">
                <img src="image/s5.jpeg" class="d-block w-100 img-fluid" alt="IMAGE NOT FOUNT">
              </div>
              <div class="carousel-item">
                <img src="image/s3.jpeg" class="d-block w-100 img-fluid" alt="IMAGE NOT FOUND">
              </div>
              <div class="carousel-item">
                <img src="image/s4.jpeg" class="d-block w-100 img-fluid" alt="IMAGE NOT FOUND">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
                <!-- slider closed -->
                <!-- <div class="row"> -->
                    <!-- ********************************* -->
                <!-- <div class="col-sm-12" id="perfecthome">
                    <b>Find Your <span id="perfect">Perfect Home </span><br>away from home</b>  
                  </div>
                </div> -->
                <!-- ******************************* -->
                <div class="row mt-5">
                    <!-- ****************************** -->
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 text-center">
                        <h4 class="websitecolor"><b>FOR RENTERS</b></h4><hr>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
                <!-- ************************************ -->
                <div class="row">
                    <!-- ******************************** -->
                    <div class="col-sm-1"></div>
                        <div class="col-sm-10 text-center">
                            <h3 class="websitecolor"><b>Let's take a step towards your new home</b></h3><hr>
                        </div>
                    <div class="col-sm-1"></div>
               </div>
               <!-- ************************* -->
               <div class="row">
                <!-- ******************************** -->
                <div class="col-sm-1"></div>
                    <div class="col-sm-6 content "  data-aos="zoom-in">
                        Let our intelligent recommendation system guide you to homes that align with your preferences.
                        Receive tailored suggestions based on your lifestyle, preferences, and desired amenities to
                         simplify your decision-making process. Effortlessly narrow down your search with our intuitive 
                         and user-friendly search filters. Whether you're looking for a specific location, number of bedrooms,
                          or amenities, our advanced search options make it easy to find the perfect . <br><br>
                          <a class="btn btn-secondary websitecolor" href="renterlogin.php" role="button">Search for home</a>
                    </div>
                    <div class="col-sm-4 content">
                        <img src="image/image.jpg" width="100%" class="img-fluid" alt="">
                    </div>
                <div class="col-sm-1"></div>
           </div>
           <!-- ************************* -->
           <div class="row">
            <!-- ******************************** -->
            <div class="col-sm-1"></div>
            <div class="col-sm-10 text-center">
                <h4 class="websitecolor"><b>OWNER'S SIDE</b></h3><hr>
            </div>
                
            <div class="col-sm-1"></div>
       </div>
       <!-- ************************* -->
       <div class="row">
        <!-- ******************************** -->
        <div class="col-sm-1"></div>
            <div class="col-sm-10 text-center">
                <h3 class="websitecolor"><b>Welcome to the Owner's Corner at RentitQuick.com </b></h3><hr>
            </div>
        <div class="col-sm-1"></div>
   </div>
   <!-- ************************* -->
       <div class="row">
        <!-- ******************************** -->
        <div class="col-sm-1"></div>
        <div class="col-sm-4 content">
            <img src="image/image1.jpg" width="100%" class="img-fluid" alt="">
        </div>
            <div class="col-sm-6 content" data-aos="zoom-in">
                
                Here we prioritize your experience as a property owner.
                 Whether you're a seasoned real estate 
                 professional or a first-time landlord, our platform is designed to empower
                  you with the tools and support you need to successfully manage and showcase your property
                  Our user-friendly listing creation process ensures that you can showcase your property 
                  in the best light. Upload stunning photos, highlight key features, and set pricing with ease, giving potential tenants
                   a compelling glimpse into the unique charm of your space<br><br>
                   <a class="btn btn-secondary websitecolor" href="ownerlogin.php" role="button">Add homes</a>
            </div>
            
        <div class="col-sm-1"></div>
   </div>
        <!-- ***********************************   -->
        <div class="row my-5">
        <!-- *********************card**************** -->
        <div class="col-sm-2"></div>
        <div class="col-sm-2">
          <img src="image/8.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-2">
          <img src="image/10.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-2">
          <img src="image/9.jpg" class="img-thumbnail" alt="...">
        </div>
        <div class="col-sm-2">
          <img src="image/11.jpg" class="img-thumbnail" alt="...">
        </div>   
        <div class="col-sm-2"></div>
      </div>
       <!-- *************************** -->

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
          <div class="col-sm-6 my-3">  Copyright &copy; | All Right Reserved
          </div>
          <div class="col-sm-6 my-2">
            <a href="#" target="_blank"><i class="bi bi-twitter p-2 rounded-circle  btn btn-outline-primary"></i></a>
            <a href="#" target="_blank"><i class="bi bi-facebook p-2 rounded-circle btn btn-outline-primary" ></i></a>
            <a href="#" target="_blank"><i class="bi bi-instagram p-2 rounded-circle btn btn-outline-primary"></i></a>
            <a href="#" target="_blank"><i class="bi bi-whatsapp p-2 rounded-circle btn btn-outline-primary"></i></a>
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