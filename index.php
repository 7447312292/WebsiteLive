<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $id = $_POST['Id'];
    $companyName = $_POST['comp_name'];
    $email = $_POST['email'];
    $mob_num = $_POST['mob_num'];
    $password = $_POST['password'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact_form`(`Id`, `comp_name`, `email`, `mob_num`, `password`, `city`, `pincode`, `message`) VALUES ('$id','$companyName','$email','$mob_num','$password','$city','$pincode','$message')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Inserted successfully.";
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"> -->
     <title>Hello, world!</title>
     
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="whatsap.css">
    <link rel="stylesheet" href="googlesheet.css">
    <!-- <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --> -->
     <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    
  </head>
  <body>
   
   

    <header>
      
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom  fixed-top">
      
      <a class="navbar-brand  fs-2" href="#"><img src="images1/TECH-001.png" width="180px" alt=""></span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
          <li class="nav-item active ">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#Services" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div> -->
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#ourclient">Our Team</a>
          </li> <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
         
        </ul>
        
      </div>
    </nav> --> 
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 border-bottom  fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand  fs-2" href="#"><img src="images1/TECH-001.png" width="180px" alt=""></span></a>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto fs-5">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#about">About Us</a>
            <a class="nav-link" href="#Services">Services</a>
            <a class="nav-link" href="#ourclient">Our Client</a>
            <a class="nav-link" href="#contact">Our Contact</a>
           
            
          </div>
        </div>
      </div>
    </nav>


    <div id="carouselExampleCaptions my-5" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner my-5">
        <div class="carousel-item active">
          <img src="images1/ban.jpg" class="d-block w-100 h-80vh img-fluid img-thumbnail" alt="...">
          <div class="carousel-caption  d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images1/ban.jpg" class="d-block w-100 h-80vh img-fluid img-thumbnail" alt="...">
          <div class="carousel-caption  d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images1/ban.jpg" class="d-block w-100 h-80vh img-fluid img-thumbnail" alt="...">
          <div class="carousel-caption  d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </header>

  <section id="about"  >
                 <div class="container my-5" >
                  <div class="text-center my-5"  >
                    <h1 data-aos="fade-up" data-aos-offset="200">About <span class="text-primary">Me</span></h1>
                     <hr / class="w-25 m-auto">
                    </div>
                    
                    <div class="container" >
    <div class="row">
      <div class="col-md-6" data-aos="flip-left">
        <div class="card shadow  mb-5 bg-body rounded">
          <div class="row no-gutters">
            <div class="col-md-4 ">
              <img src="images1/it company.webp" class="card-img img-fluid img-thumbnail h-100 "  alt="Left Image 1">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">VISION</h5>
                <p class="card-text">Pioneering innovation through cutting-edge software solutions. Empowering businesses with transformative technology. Redefining the future of digital excellence.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6" data-aos="flip-left">
        <div class="card shadow  mb-5 bg-body rounded">
          <div class="row no-gutters">
            <div class="col-md-4 ">
              <img src="images1/1642.jpg" class="card-img img-fluid img-thumbnail h-100" alt="Left Image 2">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">MISSION</h5>
                <p class="card-text">
                  Empowering individuals and organizations with intuitive, reliable, and sustainable software experiences, driving global progress.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
                 
                 <div class="row my-5" >
                         <div class="col-sm-12 col-md-6 col-lg-6 col-12 my-5 " data-aos="zoom-in">
                              <h1>Software Development<span class="text-primary"> Life Cycle</span></h1>
                              <p class="p-2" style="text-align:justify;">
The software development cycle includes stages like requirements gathering, design, implementation, testing, deployment, and maintenance. Stakeholder needs are identified, followed by architectural planning. Code is then written, tested, and deployed, with ongoing maintenance for updates and improvements, ensuring adaptability to changing needs and technologies.</p>
                              <button type="button" class="btn btn-light mb-5">More About Me</button>

                              <!-- <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="zoom-in-left">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                     Planning
                                    </button>
                                  </h2>
                                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                     Analysis
                                    </button>
                                  </h2>
                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code></div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                      Design
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                      implementation
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                      Testing And Integration
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                      Maintenance
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. </div>
                                  </div>
                                </div>
                              </div> -->
                         </div>
                         <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end " data-aos="fade-up">
                                   <img src="images1/sdlc.png" class="img-fluid " alt="">
                         </div>
                 </div>
                </div>
  </section>

  <section class="Services py-5 bg-light">
              <div class="container" id="Services">
                <div class="text-center">
                  <h1 class="text-center">Our <span class="text-primary">Services</span></h1>
                  <hr / class="w-25  m-auto">
                </div>
                         <div class="row my-5" data-aos="zoom-in-down" data-aos-offset="200">
                             <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                              <div class="card bg-primary text-white ">
                                <div class="card-body">
                                  <!-- <i class="fa fa-users bg-white p-2 text-dark rounded mb-2"></i> -->
                                  <img src="images1/world-wide-web.png" width="40px" alt="" class="src">
                                  <h5 class="card-title">Web Development</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                              </div>
                             </div>
                             <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                              <div class="card">
                                <div class="card-body">
                                  <!-- <i class="fa fa-users bg-primary p-2 text-light mb-2 rounded mb-2"></i>
                                   -->
                                   <img src="images1/development.png" width="40px" alt="" class="src">
                                  <h5 class="card-title">Mobile App Development</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                              </div>
                             </div>
                             <div class="col-sm-12 col-md-4 col-lg-4  col-12">
                              <div class="card">
                                <div class="card-body">
                                  <!-- <i class="fa fa-users bg-primary p-2 text-white  rounded mb-2"></i> -->
                                  <img src="images1/bullhorn.png" width="40px" alt="" class="src">
                                  <h5 class="card-title">Digital Marketing</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                              </div>
                             </div>
                         </div>
                         <div class="row my-5" data-aos="zoom-in-down" data-aos-offset="200">
                             <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                              <div class="card ">
                                <div class="card-body">
                                  <!-- <i class="fa fa-users bg-primary p-2 text-white rounded mb-2"></i> -->
                                  <img src="images1/backend.png" width="40px" alt="" class="src">
                                  <h5 class="card-title">Backend Development</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                              </div>
                             </div>
                             <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                              <div class="card">
                                <div class="card-body">
                                  <!-- <i class="fa fa-users bg-primary p-2 text-white rounded mb-2"></i> -->
                                  <img src="images1/world-wide-web.png" width="40px" alt="" class="src">
                                  <h5 class="card-title">E-Commerce Development</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                              </div>
                             </div>
                             <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                              <div class="card">
                                <div class="card-body">
                                  <!-- <i class="fa fa-users bg-primary p-2 text-white rounded mb-2"></i> -->
                                  <img src="images1/world-wide-web.png" width="40px" alt="" class="src">
                                  <h5 class="card-title">IOT & Embedded</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                              </div>
                             </div>
                         </div>
              </div>
  </section>

  <!-- /////////////////////////////team////////////////////////////// -->
  <section class="team my-5 text-center">
       <div class="container">
              <div class="text-center">
                <h1 data-aos="fade-up" data-aos-offset="200">Our <span class="text-primary">TEAM</span></h1>
                <hr / class="text-center w-25 m-auto">
              </div>
               <div class="row my-5">
                          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                            <div class="card">
                              <div class="card-body">
                                <img src="images1/boy.jpg" class="img-fluid rounded-circle border border-primary p-2 "  alt="">
                                <h5 class="card-title mt-4">Rajat</h5>
                                <p class="card-text">Frontend Developer</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                            <div class="card">
                              <div class="card-body">
                                <img src="images1/boy.jpg" class="img-fluid rounded-circle border border-primary p-2 "  alt="">
                                <h5 class="card-title mt-4">Rajat</h5>
                                <p class="card-text">Frontend Developer</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                            <div class="card">
                              <div class="card-body">
                                <img src="images1/boy.jpg" class="img-fluid rounded-circle border border-primary p-2 "  alt="">
                                <h5 class="card-title mt-4">Rajat</h5>
                                <p class="card-text">Frontend Developer</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                              </div>
                            </div>
                          </div>
               </div>
       </div>
   
  </section>


  <!-- <section class="Contact py-5">
                       <div class="container">
                               <div class="text-center">
                                 <h1>Feel free <span class="text-primary">to Connect</span></h1>
                                 <hr / class="m-auto w-25">
                               </div>
                                 <div class="row my-5">
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                                      <form class="row g-3">
                                        <div class="col-md-6">
                                          <label for="inputEmail4" class="form-label">Email</label>
                                          <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="col-md-6">
                                          <label for="inputPassword4" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-12">
                                          <label for="inputAddress" class="form-label">Address</label>
                                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                       
                                        <div class="col-md-6">
                                          <label for="inputCity" class="form-label">City</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="col-md-4">
                                          <label for="inputState" class="form-label">State</label>
                                          <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                          <label for="inputZip" class="form-label">Zip</label>
                                          <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="col-12">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                              Check me out
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <button type="submit" class="btn btn-primary">Sign in</button>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end">
                                        <img src="images1/boy.jpg" class="img-fluid img-thumbnail p-2 data-aos="fade-down-left" alt="">
                                    </div>

                                 </div>
                       </div>
  </section> -->
  <!-- ////////////////////////////whats app start//////////////////////// -->
  <div class="wh-api">
    <div class="wh-fixed whatsapp-pulse">
      <a href="https://api.whatsapp.com/send?phone=7447312292&text=hello world">
        <button class="wh-ap-btn"></button>
      </a>
    </div>
  </div>
  <!-- ////////////////////////////whats app End//////////////////////// -->


 <!-- ////////////////////////////////contact////////////////////// -->
   
 




<section id="ourclient"  >
  <div class="carousel-wrap one" >
    <div class="text-center">
      <h1>Client <span class="text-primary">Support</span></h1>
      <hr / class="text-center w-25 m-auto">
    </div>
    <div class="owl-carousel two my-4 ">
      <div class="item shadow p-3 mb-5 bg-body rounded "><img src="images1/tcs.png" width="180px" height="160px"></div>
      <div class="item shadow p-3 mb-5 bg-body rounded "><img src="images1/alitza.png" width="180px" height="160px"></div>
      <div class="item shadow p-3 mb-5 bg-body rounded"><img src="images1/tbs.jpg" width="180px" height="160px"></div>
      <div class="item shadow p-3 mb-5 bg-body rounded "><img src="images1/psk.png" width="180px" height="160px"></div>
      <div class="item shadow p-2 mb-5 bg-body rounded "><img src="images1/vishwa.jpg" width="180px" height="170px"></div>
      <!-- <div class="item"><img src="images1/download (1).png"></div>
      <div class="item"><img src="images1/download (1).png"></div>
      <div class="item"><img src="images1/download (1).png"></div>
      <div class="item"><img src="images1/download (1).png"></div>
      <div class="item"><img src="images1/download (1).png"></div>
      <div class="item"><img src="images1/download (1).png"></div>
      <div class="item"><img src="images1/download (1).png"></div> -->
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

 <script>
   $('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})
</script> 
<!-- ///////////////////////////////contact us form/////////////////////////// -->

<section id="contact">
<div class="container-fluid contact_form"  >

  <div class="text-center  ">
   
   <!----> <h1 data-aos="fade-up" data-aos-offset="200" class="text-white" >Contact<span class="text-primary"> Us</span></h1>
     <hr / class="w-25 m-auto">
    </div>
    <div class="container w-50 ">
    <div class="row">
      <div class="wrapper">
        <div class="title-text">
          <div class="title login text-light">Enquiry Form</div>
          <div class="title signup text-light">Signup Form</div>
        </div>
        
        <div class="form-container">
          <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" id="corporateTab" class="slide login text-light">Corporate</label>
            <label for="signup" id="personalTab" class="slide signup text-light">Personal</label>
            <div class="slider-tab"></div>
          </div>
          <div class="form-inner">
            <form action="#" class="login" method="post" >
              <div class="field">
                <input type="text" id="comp_name" name="comp_name" placeholder="Company Name" required>
              </div>
              <div class="field">
                <input type="email"  id="Email_id" name="email" placeholder="Email Id" required>
              </div>
              <div class="field">
                <input type="number"  id="mob_num" name="mob_num" placeholder="Mobile Number" required>
              </div>
              <div class="field">
                <input type="password"  id="pas" name="password" placeholder="Password" required>
              </div>
              <div class="field">
                <input type="text"  id="cit" name="city" placeholder="City" required>
              </div>
              <div class="field">
                <input type="number"  id="pin" name="pincode" placeholder="Pincode" required>
              </div>
              <div class="field">
                <input type="text"  id="msg" name="message" placeholder="Message" required>
              </div>
              <div class="pass-link"><a href="#">Forgot password?</a></div>
              <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Login"  name= "submit" onclick="return validateFormSignIn()">
              </div>
              <!-- <div class="signup-link">Not a member? <a href="">Signup now</a></div> -->
            </form>
            <form action="#" method="GET" class="signup" >
              <div class="field">
                <input type="text" id="full_Name" placeholder="Full Name" required>
              </div>
              <div class="field">
                <input type="email" id="email1" placeholder="Email ID" required>
              </div>
              <div class="field">
                <input type="password" id="mob1" placeholder="Mobile Number" required>
              </div>
              <div class="field">
                <input type="password" id="pas1" placeholder="Password" required>
              </div>
              <div class="field">
                <input type="text" id="cit1" placeholder="City" required>
              </div>
              <div class="field">
                <input type="number" id="pin1" placeholder="PinCode" required>
              </div>
              <div class="field">
                <input type="textarea" id="msg1" placeholder="message" required>
              </div>
              <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Signup" onclick="return validateFormSignUp()">
              </div>
            </form>
          </div>
        </div>
      </div>
  
          </div> 
      </div> 
           
      
   
                
            </div>
             
        
            
            <div>
          
        </div>
      </div>
    </div>
  
</div>
</div>
</section>

 <!-- <script>
 document.getElementById("personalTab").addEventListener("click", function() {
    document.getElementById("corporateTab").classList.remove("signin-active");
    document.getElementById("corporateTab").classList.add("signup-inactive");
    document.getElementById("personalTab").classList.remove("signup-inactive");
    document.getElementById("personalTab").classList.add("signin-active");
    document.getElementById("formSignUp").style.display = "block";
    document.getElementById("formSignIn").style.display = "none";
  });

  document.getElementById("corporateTab").addEventListener("click", function() {
    document.getElementById("personalTab").classList.remove("signin-active");
    document.getElementById("personalTab").classList.add("signup-inactive");
    document.getElementById("corporateTab").classList.remove("signup-inactive");
    document.getElementById("corporateTab").classList.add("signin-active");
    document.getElementById("formSignUp").style.display = "none";
    document.getElementById("formSignIn").style.display = "block";
  });
</script>  -->
 <!-- <script>
 document.getElementById("personalTab").addEventListener("click", function() {
    document.getElementById("corporateTab").classList.remove("signin-active");
    document.getElementById("corporateTab").classList.add("signup-inactive");
    document.getElementById("personalTab").classList.remove("signup-inactive");
    document.getElementById("personalTab").classList.add("signin-active");
    document.getElementById("formSignUp").style.display = "block";
    document.getElementById("formSignIn").style.display = "none";
  });

  document.getElementById("corporateTab").addEventListener("click", function() {
    document.getElementById("personalTab").classList.remove("signin-active");
    document.getElementById("personalTab").classList.add("signup-inactive");
    document.getElementById("corporateTab").classList.remove("signup-inactive");
    document.getElementById("corporateTab").classList.add("signin-active");
    document.getElementById("formSignUp").style.display = "none";
    document.getElementById("formSignIn").style.display = "block";
  });
</script>  -->

<script>
  function validateFormSignUp() {
    var full_Name = document.getElementById("full_Name").value;
    var emaill = document.getElementById("email1").value;
    var mob1 = document.getElementById("mob1").value;
    var pas1 = document.getElementById("pas1").value;
    var cit1 = document.getElementById("cit1").value;
    var pin1 = document.getElementById("pin1").value;
    var msg1 = document.getElementById("msg1").value;

    if (!full_Name.trim() || !emaill.trim() || !mob1.trim() || !pas1.trim() || !cit1.trim() || !pin1.trim() || !msg1.trim()) {
      alert("Please fill in all fields.");
      return false;
    }

    // Mobile number validation
    if (!validateMobileNumber(mob1)) {
      alert("Please Enter Correct Mobile Number....");
      return false;
    }

    // Pincode validation (example: must be 6 digits)
    if (!/^\d{6}$/.test(pin1)) {
      alert("Please enter pincode");
      return false;
    }

    // If all validations pass, proceed to WhatsApp
    sendViaWhatsAppSignUp(full_Name, emaill, mob1, pas1, cit1, pin1, msg1);
    return true;
  }

  function validateFormSignIn() {
    var comp_name = document.getElementById("comp_name").value;
    var Email_id = document.getElementById("Email_id").value;
    var mob_num = document.getElementById("mob_num").value;
    var pas = document.getElementById("pas").value;
    var cit = document.getElementById("cit").value;
    var pin = document.getElementById("pin").value;
    var msg = document.getElementById("msg").value;

    if (!comp_name.trim() || !Email_id.trim() || !mob_num.trim()  || !pas.trim() ||!cit.trim() || !pin.trim() || !msg.trim()) {
      alert("Please fill in all fields.");
      return false;
    }

    // Mobile number validation
    if (!validateMobileNumber(mob_num)) {
      alert("Please enter a valid 10-digit mobile number.");
      return false;
    }

    // Pincode validation (example: must be 6 digits)
    if (!/^\d{6}$/.test(pin)) {
      alert("Please enter a valid 6-digit pincode.");
      return false;
    }

    // If all validations pass, proceed to WhatsApp
    sendViaWhatsAppSignIn(comp_name, Email_id, mob_num, pas, cit, pin, msg);
    return true;
  }

  // Mobile number validation function
  function validateMobileNumber(mob1) {
    return /^\d{10}$/.test(mob1);
  }

  // Function to send data via WhatsApp (SignUp form)
  function sendViaWhatsAppSignUp(full_Name, emaill, mob1, pas1, cit1, pin1, msg1) {
    var whatsappURL = "https://wa.me/9371818764?text=" +
      "Full Name: " + full_Name + "%0a" +
      "Email: " + emaill + "%0a" +
      "Password: " + mob1 + "%0a" +
      "Mobile Number: " + pas1 + "%0a" +
      "Address: " + cit1 + "%0a" +
      "City: " + pin1 + "%0a" +
      "Pincode: " + msg1 + "%0a" +
      "WWW.UNEXPLAIN.TECH";

    window.open(whatsappURL, "_blank").focus();
  }

  // Function to send data via WhatsApp (SignIn form)
  function sendViaWhatsAppSignIn(comp_name, Email_id,mob_num, pas, cit, pin, msg) {
    var whatsappURL = "https://wa.me/7447312292?text=" +
      " Hello,I am :- " + comp_name + "%0a" +
      "My Contact No is:- " + Email_id + "%0a" +
      "i live:- " + mob_num + "%0a" +
      "i live:- " + pas + "%0a" +
      "And I am From : " + cit + "%0a" +
      "Pincode: " + pin + "%0a" +
      "My Enquiry: " + msg + "%0a" +
      "WWW.UNEXPLAIN.TECH";

    window.open(whatsappURL, "_blank").focus();
  }
</script> 
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->


<!-- Add onclick attributes to form submission buttons -->






<!-- ///////////////////loader/////////////////////////////// -->
<!-- <script>
  // Hide loader when page content is fully loaded
window.addEventListener('load', function() {
  var loader = document.getElementById('loader');
  loader.style.display = 'none';
}); -->

<!-- </script> -->
<!-- Contact 1 - Bootstrap Brain Component -->


  <!-- /////////////////////////contact us///////////////////////// -->
  <!-- <div class="container-fluid  contact">
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
              <form >
                  <div class="input-group">
                        <div class="input-field" id="nameField">
                          <i class="fa-solid fa-user"></i>
                          <input  type="text" placeholder="Name" >
                        </div>
                  </div>
                  <div class="input-group">
                        <div class="input-field">
                          <i class="fa-solid fa-user"></i>
                          <input type="text" placeholder="Email">
                        </div>
                  </div>
                  <div class="input-group">
                        <div class="input-field">
                          <i class="fa-solid fa-user"></i>
                          <input  type="text" placeholder="Password">
                        </div>
                  </div>
                  <div class="input-group">
                        <div class="input-field" id="addressField">
                          <i class="fa-solid fa-user"></i>
                          <input  type="text" placeholder="Address">
                        </div>
                        <p>Lost Password <a href="">Click Here!</a></p>
                  </div>
                   <div class="btn-field">
                         <button type="button" id="signupBtn">Sign Up</button>
                         <button type="button" id="signinBtn" class="disable">Sign in</button>
                   </div>
              </form>
        </div>
  </div> -->
<!--
   }

          <div class="container con_product">
            <div class="text-center my-5 ">
              <h1 data-aos="fade-up" data-aos-offset="200">Our<span class="text-primary"> Products</span></h1>
               <hr / class="w-25 m-auto">
              </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
            <div class="card ">
                <div class="imgBx">
                    <img src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5782.png" alt="nike-air-shoe">
                </div>
    
                <div class="contentBx">
    
                    <h2>Product1</h2>
    
                    <div class="size">
                        <h3>Size :</h3>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                    </div>
    
                    <div class="color">
    
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="#">Buy Now</a>
                </div>
              </div>
            </div>
              <div class="col">
            <div class="card ">
                <div class="imgBx">
                    <img src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5782.png" alt="nike-air-shoe">
                </div>
    
                <div class="contentBx">
    
                    <h2>Products 2</h2>
    
                    <div class="size">
                        <h3>Size :</h3>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                    </div>
    
                    <div class="color">
    
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="#">Buy Now</a>
                </div>
              </div>
            </div>
              <div class="col">
            <div class="card ">
                <div class="imgBx">
                    <img src="http://pngimg.com/uploads/running_shoes/running_shoes_PNG5782.png" alt="nike-air-shoe">
                </div>
    
                <div class="contentBx">
    
                    <h2>Products 3</h2>
    
                    <div class="size">
                        <h3>Size :</h3>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                    </div>
    
                    <div class="color">
    
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="#">Buy Now</a>
                </div>
              </div>
            </div>
        </div>
      </div>
        </section> -->

        <script>
           const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });

        </script>
<!-- 
        /////////////////////////////////////start
        /////////////////////////////////////ENd -->


        <section>
          <div class="container">
          <div class="text-center my-5 ">
            <h1 data-aos="fade-up" data-aos-offset="200">Our<span class="text-primary"> Products</span></h1>
             <hr / class="w-25 m-auto">
            </div>
             <div class="container p-4">
            <!-- Section: Images -->
            <section class="">
              <div class="row">
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                  <div data-mdb-ripple-init
                    class="bg-image hover-overlay shadow-1-strong rounded"
                    data-ripple-color="light"
                  >
                    <img src="images1/1642.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                  <div data-mdb-ripple-init
                    class="bg-image hover-overlay shadow-1-strong rounded"
                    data-ripple-color="light"
                  >
                    <img src="images1/1642.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                  <div data-mdb-ripple-init
                    class="bg-image hover-overlay shadow-1-strong rounded"
                    data-ripple-color="light"
                  >
                    <img src="images1/1642.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                  <div data-mdb-ripple-init
                    class="bg-image hover-overlay shadow-1-strong rounded"
                    data-ripple-color="light"
                  >
                    <img src="images1/1642.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                  <div data-mdb-ripple-init
                    class="bg-image hover-overlay shadow-1-strong rounded"
                    data-ripple-color="light"
                  >
                    <img src="images1/1642.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                  <div data-mdb-ripple-init
                    class="bg-image hover-overlay shadow-1-strong rounded"
                    data-ripple-color="light"
                  >
                    <img src="images1/1642.jpg" class="w-100" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                    </a>
                  </div>
                </div>
              </div>
            </section>
            <!-- Section: Images -->
          </div>
          </div>
        </section>
      
     
<!-- ///////////////////////////////footer ////////////////////////////////// -->

<!-- Pills navs -->

<!-- Pills navs -->

<!-- Pills content -->

<!-- Pills content -->
<!-- navbar script -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var navbarToggler = document.querySelector(".navbar-toggler");
    var navbarCollapse = document.querySelector(".navbar-collapse");

    navbarToggler.addEventListener("click", function() {
      if(navbarCollapse.classList.contains("show")) {
        navbarCollapse.classList.remove("show");
      } else {
        navbarCollapse.classList.add("show");
      }
    });
    
    // Close navbar when clicking outside of it
    document.addEventListener("click", function(event) {
      if (!event.target.closest(".navbar-collapse") && !event.target.closest(".navbar-toggler")) {
        navbarCollapse.classList.remove("show");
      }
    });
  });
</script>


<!-- End of .container -->
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
   
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
  AOS.init();
</script>


<script>

</script>







   </body>

<!-- ////////////////////////////////footer/////////////////////////////// -->

<!-- End of .container -->
<div class="container-fluid my-5" style="margin: 0; padding:0;">

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between "
            
             >
      <!-- Left -->
     
      <!-- Left -->

      <!-- Right -->
      
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container-fluid text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row ">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold"><img src="images1/UNIPLEX__1_-removebg-preview.png" alt="" class=""></h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: blue; height: 2px"
                />
            <p style="text-align: justify;">
              Welcome to UNEXPLAIN <span class="text-danger">TECH</span>,
              where innovation meets excellence in IT solutions. We're a digital transformation hub, crafting tomorrow's tech solutions today. With relentless pursuit, we redefine possibilities and empower businesses to thrive. Join us in innovating, where every code line tells a tale of progress and excellence."            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a href="#!" class="text-white">MDWordPress</a>
            </p>
            <p>
              <a href="#!" class="text-white">BrandFlow</a>
            </p>
            <p>
              <a href="#!" class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Terms And Condition</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-white">FAQ</a>
            </p>
            <p>
              <a href="#!" class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-white">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <!-- <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p> -->
           
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3 "
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      <!-- © 2020 Copyright: -->
      <!-- <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        > -->
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

</div>

</html>