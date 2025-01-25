<?php
    session_start();

    if ( (!isset($_SESSION['id'])) || ($_SESSION['id'] == '') )
    {
        // echo "<script>location.href='CHAT_APPLICATION_Index.php'</script>";
    }
    else
    {
        echo "<script>location.href='Chat_Home.php'</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designer World Page</title>

    <!-- favi icon -->
    <link rel="icon" href="llogo-removebg-preview.png">

    <!-- google font icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
    <!-- my css file -->


    <link rel="stylesheet" href="CSS/Header-Footer.css">
    <link rel="stylesheet" href="CSS/error.css">
    <link rel="stylesheet" href="CSS/Designer.css">



</head>

<body id="body">
    <!-- header -->
    <header id="header" class="sticky-top">

      <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container">


            <a href="#" class="navbar-brand">
              <span class="fs-3 border border-warning  shadow p-2 align-top">Designer World</span>
              <!-- <img src="llogo-removebg-preview.png" class="d-inline-block align-bottom border" alt="" width="70" height="auto" alt="" loading="lazy"> -->
            </a>


            <button class="navbar-toggler shadow-none"  type="button"  data-bs-toggle="collapse" data-bs-target="#headNav" aria-controls="headNav" aria-expanded="false" aria-label="toggle-NAvigation">
              <span class="navbar-toggler-icon" id=""></span>
            </button>

            <div class="collapse navbar-collapse" id="headNav">

              <ul class="navbar-nav ms-auto align-items-center">
               
                <li class="nav-item">
                <a href="" id="home" class="nav-link underline">Home</a>
               </li>

               <li class="nav-item">
                <a href="" id="portfolio" class="nav-link underline">Portfolio</a>
                </li>

               <li class="nav-item">
                <a href="" id="about" class="nav-link underline">About</a>
              </li>

               <li class="nav-item">
                 <a href="" id="contact"  class="nav-link underline">Contact</a>
               </li>

               <li id="loginvalidation" class="nav-item">
                 <a href=""  class="nav-link text-white box-color" data-bs-toggle="modal" data-bs-target="#login">
                      Login
                  </a>
               </li>

               <li id="signupvalidation" class="nav-item">
                <a href="" class="nav-link text-white box-color"  data-bs-toggle="modal" data-bs-target="#sign_up">
                     SignUp
                 </a>
              </li>

              </ul>
            </div>

          </div>
      </nav>      
    </header>


  <main class="">
    
      <!-- modal block LOGIN -->
        <section id="LOGIN" class="position-absolute">
         <div class="intro">
          <div class="row">
              <div class="col-md-5 text">
                  <h1 class="fc">
                      <!-- LOGIN FORM -->
                  </h1>
                  <!-- <span type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> -->
                  <!-- </span> -->
                    <!-- Modal -->
                    <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                          <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-4" id="staticBackdropLabel">
                                  LOGIN
                              </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                       
                          <div class="modal-body ">
                              <div class="d-flex flex-column justify-content-cente align-items-center min-vh-50 ">
                                  
                                  <div class="row  p-3 shadow rounded-5 bg-transparent my-2 shadow">
                                      <div class="d-flex flex-column align-items-center justify-content-center">
                                          <div class="title align-items-center">
                                              <!-- <p class="logicon"><span class="material-symbols-outlined">person</span></p> -->
                                              <p class="h2" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Hello Again</p>
                                              <p class="small content" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">We are happy to have you back</p>
                                          </div>
                                      </div>
                                  </div>
  
                                  <div class="row p-3 shadow-none rounded-5  login-box">
                          
                                              <div class="my-2">
                                                  <form action="" method="" id="formlogin" class="container-fluid w-auto d-flex flex-column shadow  rounded pt-3 form-sign-up color" autocomplete="off">
                                                    <!-- <form action="login.php" method="post" id="formlogin"  autocomplete="off"> -->
  
                                                      <div class="container-fluid  form-group pb-3">
                              

                                                    <div class="container-fluid form-group  my-2 ">
                                                    <label for="emaillogin" class="fs-5 text-dark">Email :</label>
                                                    <input type="email" id="emaillogin" name="emaillogin" class="form-control form-control-sm shadow-none bg-transparent outline" placeholder="Ex : abc@gmail.com" >
                                                    <span class="form-text ms-3 showError"></span>
                                                    </div>  
                                                                                  
                                                    <div class="container-fluid  my-2">
                                                    <label for="passwordlogin" class="form-text fs-5 text-dark" >Password :</label>
                                                    <input type="password" id="passwordlogin" name="passwordlogin" class="form-control form-control-md shadow-none mt-2 bg-transparent  outline" maxlength="15" placeholder="Password" >
                                                    <span class="form-text ms-3 showError"></span>
                                                    </div>
                              
                              
                              
                                                  <div class="container-fluid my-2 ">
                                                      <input type="checkbox" id="condition" name="condition" class="form-check-input shadow-none outline" >
                                                      <label for="condition" class=" shadow-none fs-7 text-dark">Remember</label><br>
                                                      <span class="form-text ms-3 showError"></span>
                                                  </div>
                                                
  
                                                  <div class="container-fluid text-center my-2">
                                                      <!-- <input type="submit"  class="btn btn-md btn-success shadow-none" value="Login"> -->
                                                      <input  type="submit" class="btn btn-lg btn-primary w-100 fs-6" name="login" value="Login">
                                                  </div>
  
                              
                                                  <div class="form-group text-center my-2">
                                                      <div class="text-dark">Don't have account ? <a href=""  class="border-bottm callsignup t">Sign Up</a></div>
                                                  </div>
                              
                                                      </div>
                                                   </form>
                                              </div>
                                  </div>
                                  
                              </div>    
                             
                          </div>
  
                          <!-- <div class="modal-footer"> -->
                            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button> -->
                            <!-- <button type="button" class="btn btn-primary"></button> -->
                          <!-- </div> -->
  
                        </div>
                      </div>
                      <!--  -->
                    </div>
                    <!-- okkkkk -->
              </div>
          </div>
        </div>
        </section>


          <!-- modal block sign up-->
            <section id="SIGN_UP" class="position-absolute">
              <div class="intro">
                  <div class="row">
                      <div class="col-md-5 text">
                          <h1 class="fc">
                              <!-- SIGN UP FORM -->
                          </h1>
                          <!-- <span type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> -->
                          <!-- </span> -->
                            <!-- Modal -->
                            <div class="modal fade" id="sign_up" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                          SIGN UP Form
                                      </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="d-flex flex-column justify-content-center align-ites-center min-vh-100 ">
                                          
                                          <div class="row  p-3 shadow rounded-5 bg-transparent border-none my-2 shadow">
                                              <div class="d-flex flex-column">
                                                  <div class="title">
                                                      <p class="h3">Hello Creaters</p>
                                                      <p class="small text-dark fs-6">Sign up for the  day work , not the pay</p>
                                                  </div>
                                              </div>
                                          </div>
          
                                          <div class="row border p-3 shadow rounded-5 bg-white login-box">
                                  
                                                      <div class="my-2">
                                                          <form action="" method="" id="formsignup" enctype="multipart/form-data" class="container-fluid w-auto d-flex flex-column shadow  rounded pt-3 form-sign-up" autocomplete="off">
                                                            <input type="hidden" name="signup" value="signup">
          
                                                              <div class="container-fluid  form-group ">

                                                                <div class="container-fluid  my-2 form-group ">
                                                                      <label for="fname" class="form-text form-label text-dark fs-5">First Name :</label>
                                                                      <input type="text" id="fname" name="first_name" class="form-control form-control-sm shadow-none bg-transparent border-dark" placeholder="Enter First Name" >
                                                                      <span class="form-text ms-3 showError"></span>

                                                                  </div>  
                                              
                                                                  <div class="container-fluid  my-2 form-group ">
                                                                      <label for="lname" class="form-text form-label text-dark fs-5">Last Name :</label>
                                                                      <input type="text" id="lname" name="last_name" class="form-control form-control-sm shadow-none bg-transparent border-dark" placeholder="Enter Last Name" >
                                                                      <span class="form-text ms-3 showError"></span>
                                                                  </div>  

                                                              <div class="container-fluid  my-2 form-group ">
                                                                    <label for="email" class="form-label text-dark fs-5">Email :</label>
                                                                    <input type="email" id="email" name="email_name" class="form-control form-control-sm shadow-none bg-transparent border-dark" placeholder="Ex : abcgmail.com" >
                                                                    <span class="form-text ms-3 showError"></span>
                                                              </div>  
                                      
                                                              <div class="container-fluid form-group my-2">
                                                                <label for="mobile" class="form-text form-label text-dark fs-5">Mobile-number :</label>
                                                                <input type="text"  id="mobile" name="mobile" class="form-control form-control-sm shadow-none bg-transparent border-dark" maxlength="10" placeholder="000-000-0000" 
                                                                onkeypress="return (event.charCode>= 48 && event.charCode<=58)">                            
                                                                <span class="form-text ms-3 showError"></span>
                                                              </div>
                                      
                                                              <div class="container-fluid form-group my-2">
                                                              <label for="dob" class="form-text form-label text-dark fs-5">Date Of Birth :</label>
                                                              <input type="date" id="dob" name="dob" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" >
                                                              <span class="form-text ms-3 showError"></span>
                                                              </div>
                                      
          
                                                           <div class="container-fluid  my-2 " >
                                                           <div class="row form-group">
                                                               <div class="col-12 ">
                                                                   <label for="male" class="form-text text-dark fs-5 gender">Gender :</label>
          
                                                                  <input type="radio" id="male" name="gender" class="form-check-input mt-2 shadow-none border-dark"  value="male" >
                                                                  <label class="form-text me-2" for="male">Male </label>
                                                          
                                                                  <input type="radio" id="female" name="gender" class="form-check-input mt-2 shadow-none border-dark"  value="female" >
                                                                  <label class="form-text" for="female">Female </label>
                                                                  <br>
          
                                                                  <span class="form-text ms-3 showError"></span>
                                                          </div>
                                                          </div>
                                                          </div>
                                      
                                                          <div class="container-fluid  my-2">
                                                          <label for="address" class="form-text text-dark fs-5">Address :</label>
                                                              <textarea id="address" name="address" class="form-control form-text form-control-sm shadow-none mt-2 bg-transparent border-dark" rows="3" placeholder="Address"></textarea>
                                                              <span class="form-text ms-3 showError"></span>
                                                          </div>
                                      
                                                          <div class="container-fluid my-2">
                                                          <label for="hobbies" class="form-text text-dark fs-5">Profession :</label>
                                                          <select type="datalist" class="form-select form-select-md shadow-none mt-2 bg-transparent border-dark" id="hobbies" name="hobby[]" multiple="multiple" size="2">

                                                              <option  class="form-text"  value="none" disabled>Selected</option>
                                                              <option  class="form-text" value="Director">Director</option>
                                                              <option  class="form-text" value="Developer">Developers</option>
                                                              <option  class="form-text" value="Engineer">Engineer</option>
                                                              <option  class="form-text" value="Web Design" >Web Design</option>                                      
                                                              <option  class="form-text" value="Dancer">Dancer</option>
                                                              <option  class="form-text" value="Driver">Driver</option>
                                                              <option  class="form-text" value="Teacher">Teacher</option>
                                                              <option  class="form-text"  value="Pilot">Pilot</option>

                                                          </select>
                                                          <span class="form-text ms-3 showError"></span>
                                                          </div>

                                                          <div class="container-fluid my-2">
                                                            <label for="image" class="form-text text-dark fs-5">Profile*</label>
                                                            <input type="file" id="image" name="image" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark">
                                                            <span class="form-text ms-3 showError"></span>
                                                            </div>
                                      
                                                          <div class="container-fluid  my-2">
                                                              <label for="cpass" class="form-text text-dark fs-5">Create Password :</label>
                                                              <input type="password" id="cpass" name="createpassword" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" maxlength="15" placeholder="Create-Password" >
                                                              <span class="form-text ms-3 showError"></span>
                                                          </div>
                                      
                                      
                                                          <div class="container-fluid my-2">
                                                              <label for="rpass" class="form-text text-dark fs-5">Re-Type Password :</label>
                                                              <input type="password" id="rpass" name="re_password" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" maxlength="15" placeholder="Type-password" >
                                                              <span class="form-text ms-3 showError"></span>
                                                          </div>

                                      
                                                          <div class="container-fluid mt-2 ">
                                                              <input type="checkbox" id="agree" name="agree" class="form-check-input shadow-none" >
                                                              <label for="agree" class="form-text text-primary border-dark ">I agree</label><br>
                                                              <span class="form-text ms-3 showError"></span>
                                      
                                                          </div>
          
                                                          <div class="container-fluid text-center my-2">
                                                              <input type="submit"  class="btn btn-lg btn-success w-100 shadow-none fs-6 text-white" name="signup" value="SignUp">
                                                              <!-- <div  type="submit" class="btn btn-lg btn-success w-100  fs-6" value="SignUp">Sign Up</div> -->
                                                          </div>
          
                                      
                                                          <div class="form-group text-center mb-3">
                                                              <div class="text-dark">Already have an account ? <a href="" class="text-primary calllogin">Login</a></div>
                                                          </div>
                                      
                                                              </div>
                                                           </form>
                                                      </div>
                                          </div>
                                      </div>    
                                     
                                  </div>
          
                                  <!-- <div class="modal-footer"> -->
                                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"></button> -->
                                    <!-- <button type="button" class="btn btn-primary"></button> -->
                                  <!-- </div> -->
          
                                </div>
                              </div>
                              <!--  -->
                            </div>
                      </div>
                  </div>
          
            </section>
            <!-- sign up end -->
             
            
            <!-- SLIDE BLOCK -->
            <section>
              <div id="slide-block" class="carousel slide carousel-fade" data-bs-ride="carousel">
       
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#slide-block" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#slide-block" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#slide-block" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#slide-block" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#slide-block" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
       
            <div class="carousel-inner">
          
              <div class="carousel-item active" id="img1">
              <img src="Images/media_20240814_082407_675468260272618442.png" class="d-block w-100 " alt="...">
              <div class="carousel-caption" id="slide-item">
                <h2 class="container h2">"Everything is designed.."</h2>
                <p class="container" >“Design is in everything we make, but it's also between those things. It's a mix of craft, science, storytelling, propaganda, and philosophy.” - Erik Edigard.</p>
                <button type="button" class="btn shadow px-5 text-white"  data-bs-toggle="modal" data-bs-target="#login">LOGIN</button>
               </div>
              </div>

              <div class="carousel-item " id="img2">
                <img src="Images/media_20240810_133319_4625334587121968051.png" class="d-block w-100 blur" alt="...">
                <div class="carousel-caption d-md-block" id="slide-item">
                  <h2 class="h2">“If you think math is hard, try web design"</h2>
                  <p class="" style="color:gray;">Design is not just what it looks like and feels like. Design is how it works.” “If you think good design is expensive” </p>
                  <button type="button" class="btn  shadow px-5 text-white">Web Design</button>              
                </div>
              </div>

          
              <div class="carousel-item " id="img1">
                <img src="Images/media_20240814_082407_5819083847365423016.png" class="d-block w-100 blur" alt="...">
                <div class="carousel-caption d-md-block" id="slide-item">
                  <h2 class="h2" style="color:#000">“SEO is a journey, not a destination” </h2>
                  <p class="text-white ">Searching is half the fun: life is much more manageable when thought of as a scavenger hunt as opposed to a surprise party. ... </p>
                  <button type="button" class="btn shadow px-5 text-white">Search Optimization</button>              
                </div>
              </div>

              <div class="carousel-item" id="img1">
                <img src="Images/Green and Dark Modern Online Course Presentation Template.png" class="d-block w-100 blur" alt="..." style=" background-position: center;background-size: cover; background-repeat: no-repeat;">
                <div class="carousel-caption d-md-block" id="slide-item">
                  <h2 class="h2">"I shop, therefore I am."</h2>
                  <p class="" style="color:#F39F5A;">I love buying things online because when they arrive its like a gift to me from me</p>
                  <button type="button" class="btn shadow px-5 text-white">Online shop</button>              
                </div>
              </div>

          
              <div class="carousel-item">
                <img src="Images/media_20240814_082407_5591430235049057119.png" class="d-block w-100 blur" alt="...">
                <div class="carousel-caption" id="slide-item"> <!--d-none d-md-block-->
                  <h2 class="h2">"A Strong Network"</h2>
                  <p class="text-muted">Don't use it to impress people,use it to impact people</p>
                  <button type="button" class="btn shadow px-5 text-white">Social</button>              
                </div>
              </div>

       </div>

        <button class="carousel-control-prev " type="button" data-bs-target="#slide-block" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next " type="button" data-bs-target="#slide-block" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
              </div>
            </section>

             <!-- SERVICES BLOCK -->
             <section id="service-block" >
             <div class=" text-center p-3 mx-5">
                <span class="btn btn-md shadow services">Our Services</span>
                <!-- <div class="d-flex flex-column align-items-center  justify-content-lg-around " > -->
                <!-- <div class="d-flex  flex-column align-items-center flex-md-row justify-content-md-around flex-md-wrap flex-lg-row  justify-content-lg-around" > -->
                <div class="row mx-3 pt-2">
                  
                  <!-- <div class="mx-auto col-12  col-sm-6 col-md-3 col-lg-3 col-xl-3 my-2 "> -->
                    <div class="mx-auto col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 my-2 ">
                    <div class="card card-item mx-auto shadow" >
                      <span class="material-symbols-outlined  mx-auto d-block bg-primary p-3 rounded-circle">laptop_windows</span>

                      <div class="card-body">
                        <h5 class="card-title text-center angkor">Web Design</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#" class="text-decoration-none" data-bs-target="#slide-block" data-bs-slide-to="1">details..</a></p>
                        
                      </div>
                    </div>
                  </div>

                  <div class="mx-auto col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 my-2 ">
                    <div class="card card-item mx-auto shadow" >
                      <span class="material-symbols-outlined  mx-auto d-block bg-primary p-3 rounded-circle">search</span>

                      <div class="card-body">
                        <h5 class="card-title text-center angkor">SEO</h5>
                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#" class="text-decoration-none" data-bs-target="#slide-block" data-bs-slide-to="2">details..</a></p>
                      </div>
                    </div>
                  </div>

                  <div class="mx-auto col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 my-2 ">
                    <div class="card card-item mx-auto shadow" >
                      <span class="material-symbols-outlined  mx-auto d-block bg-primary p-3 rounded-circle">shopping_cart</span>
                      
                      <div class="card-body">
                        <h5 class="card-title text-center  angkor">Online shop</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#" class="text-decoration-none" data-bs-target="#slide-block" data-bs-slide-to="3">details..</a></p>
                      </div>
                    </div>
                  </div>

                  <div class="mx-auto col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 my-2 ">
                    <div class="card card-item mx-auto shadow" >
                      <span class="material-symbols-outlined  mx-auto d-block bg-primary p-3 rounded-circle">thumb_up</span>

                      <div class="card-body">
                        <h5 class="card-title text-center angkor">Social Media</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#" class="text-decoration-none" data-bs-target="#slide-block" data-bs-slide-to="4">details..</a></p>
                      </div>
                    </div>
                  </div>


<!--                  <div class="mt-3 shadow ">
                    <div class="card card-item" >
                      <span class="material-symbols-outlined  mx-auto d-block bg-primary p-3 rounded-circle">search</span>

                      <div class="card-body">
                        <h5 class="card-title text-center angkor">Search Optimization</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#" data-bs-target="#slide-block" data-bs-slide-to="2">Details..</a></p>
                      </div>
                    </div>
                  </div>

                  <div class="mt-3 shadow">
                    <div class="card card-item" >
                      <span class="material-symbols-outlined  mx-auto d-block bg-primary p-3 rounded-circle">shopping_cart</span>
                      
                      <div class="card-body">
                        <h5 class="card-title text-center  angkor">Online shop</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#" data-bs-target="#slide-block" data-bs-slide-to="3">Details..</a></p>
                      </div>
                    </div>
                  </div>


                  <div class="mt-3 shadow">
                    <div class="card card-item " >
                      <span class="material-symbols-outlined  mx-auto d-block bg-primary p-3 rounded-circle">thumb_up</span>

                      <div class="card-body">
                        <h5 class="card-title text-center angkor">Social Media</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content <a href="#" data-bs-target="#slide-block" data-bs-slide-to="4">Details..</a></p>
                      </div>
                    </div>
                  </div>-->

              </div>
             </div>
             </section>
               

            <!-- portfolio block  -->
            <section id="portfolio-block">
              <!-- <div  > -->
                  <div  class="container p-5 rounded shadow ">
                    <div class="container d-flex flex-column">

                        <div class="d-flex justify-content-between align-content-center head">
                            <div class="h4"><h4 class="h1">Our Portfolio Awesome</h4></div>
                            <div class=""><a href="" class="btn btn-sm shadow-none btn-md port-btn">More Details</a></div>
                        </div>

                        <div class="align-self-center">
                            <span class="material-symbols-outlined">groups</span>
                        </div>

                        <div >
                              <!-- start -->
                                  <div id="portfolioslide" class="carousel slide " data-bs-ride="carousel" >
                                   
                                    <div class="carousel-indicators">
                                      <button type="button" data-bs-target="#portfolioslide" data-bs-slide-to="0" class="active rounded-circle"  aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#portfolioslide" data-bs-slide-to="1" class="rounded-circle"  aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#portfolioslide" data-bs-slide-to="2" class="rounded-circle"  aria-label="Slide 3"></button>
                                    </div>
                            
                                  <div class="carousel-inner bg-transparent shadow " style="height:max-content">
                                    
                                    <!-- I slide -->
                                    <div class="carousel-item active" >
                                      <div class="row justify-content-center p- shadow ">

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 " >
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center justify-content-center rounded-3">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Sam</h4>
                                              <h6 class="my-2 text-center text-muted">"Software Developer"</h6>
                                              <p class=" text-center pb-3 d-none  d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Jose</h4>
                                              <h6 class="my-2 text-center text-muted">"Software Developer"</h6>
                                              <p class=" text-center pb-3 d-none d-md-block port-color" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Nobily</h4>
                                              <h6 class="my-2 text-center text-muted">"Software Developer"</h6>
                                              <p class=" text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Nobily</h4>
                                              <h6 class="my-2 text-center text-muted">"Software Developer"</h6>
                                              <p class=" text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>


                              
                                      </div>
                                     </div>   

                                     <!--  -->
                                    <!-- II slide -->
                                    <div class="carousel-item " >
                                      <div class="row justify-content-center p- shadow ">

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 " >
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center justify-content-center rounded-3">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Sam</h4>
                                              <h6 class="my-2 text-center text-muted">"Lead Developer"</h6>
                                              <p class=" text-center pb-3 d-none  d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Jose</h4>
                                              <h6 class="my-2 text-center text-muted">"Web Developer"</h6>
                                              <p class=" text-center pb-3 d-none d-md-block port-color" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Nobily</h4>
                                              <h6 class="my-2 text-center text-muted">"Backend Developer"</h6>
                                              <p class=" text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Nobily</h4>
                                              <h6 class="my-2 text-center text-muted">"Software Developer"</h6>
                                              <p class=" text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                              
                                      </div>
                                     </div>   

                                     <!-- III slide -->
                                     <div class="carousel-item" >
                                      <div class="row justify-content-center p- shadow ">

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 " >
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center justify-content-center rounded-3">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Sam</h4>
                                              <h6 class="my-2 text-center text-muted">"Software Developer"</h6>
                                              <p class=" text-center pb-3 d-none  d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Jose</h4>
                                              <h6 class="my-2 text-center text-muted">"Software Developer"</h6>
                                              <p class=" text-center pb-3 d-none d-md-block port-color" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Nobily</h4>
                                              <h6 class="my-2 text-center text-muted">"Software Developer"</h6>
                                              <p class=" text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>

                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                          <div class="container">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="Images/photo_sam.jpg" class="img-fluid" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Nobily</h4>
                                              <h6 class="my-2 text-center text-muted">"Software Developer"</h6>
                                              <p class=" text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                      </div>
                                      

                              
                                     <!--  -->
                                 <!--    II modify second slide 

                                     <div class="carousel-item ">
                                      <div class="row justify-content-center p-3 shadow">

                                        <div class="col-4 col-md-4">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNm6BkgT87_Fus1KSC2Bti9okSzIM0kOd5Pw&s" class="img-fluid rounded-3" width="50" height="50" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Samuel</h4>
                                              <h6 class="my-2 text-center text-muted">"Senior Web Developer"</h6>
                                              <p class="container text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                        </div>

                                         <div class="vr d-none d-sm-block"></div> 


                                        <div class="col-4 col-md-4">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="data:image/jpeg;base64,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" class="img-fluid rounded-3" width="50" height="50" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Innocent</h4>
                                              <h6 class="my-2 text-center text-muted">"Associative Web Developer"</h6>
                                              <p class="container text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-4 col-md-4">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="data:image/jpeg;base64,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" class="img-fluid rounded-3" width="50" height="50" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Robart</h4>
                                              <h6 class="my-2 text-center text-muted">"Associative Web Developer"</h6>
                                              <p class="container text-center pb-3 d-none d-md-block port-color" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                        </div>

                              
                                      </div>
                                      
                                     </div>   
                                    -->


                                      <!-- II second  slide 
                                     <div class="carousel-item ">

                                      <div class="row justify-content-center p-3 shadow ">

                                        <div class="col-4 col-md-4">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="">
                                              <img src="data:image/jpeg;base64,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" class="img-fluid rounded-3" width="50" height="50" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Samuel</h4>
                                              <h6 class="container my-2 text-center text-muted">" Senior Application Developer "</h6>
                                              <p class="container text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                        </div>

                                              <div class="vr d-none d-sm-block"></div>


                                        <div class="col-4 col-md-4">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="">
                                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNm6BkgT87_Fus1KSC2Bti9okSzIM0kOd5Pw&s" class="img-fluid rounded-3" width="50" height="50" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Innocent</h4>
                                              <h6 class="my-2 text-center text-muted">" Lead Application Developer "</h6>
                                              <p class="container text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-4 col-md-4">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="">
                                              <img src="data:image/jpeg;base64,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" class="img-fluid rounded-3" width="50" height="50" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Robart</h4>
                                              <h6 class="my-2 text-center text-muted">" Lead Application Developer "</h6>
                                              <p class="container text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                        </div>

                              
                                      </div>
                                     </div>   -->

                                      <!-- Third  
                                     <div class="carousel-item ">
                                      <div class="row justify-content-center p-3 shadow">

                                        <div class="col-4 col-md-4">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNm6BkgT87_Fus1KSC2Bti9okSzIM0kOd5Pw&s" class="img-fluid rounded-3" width="50" height="50" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Srinivas</h4>
                                              <h6 class="my-2 text-center text-muted">" Senior Web Developer "</h6>
                                              <p class="container text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                        </div>

                                         <div class="vr d-none d-sm-block"></div> 


                                        <div class="col-4 col-md-4">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAwgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAIDBAYHAQj/xAA+EAACAQMDAgQDBAkDAgcAAAABAgMABBEFEiEGMRNBUWEUInEjMoGRByRCUmKhscHhFTPRJvA0NUNTY3Ky/8QAGQEAAwEBAQAAAAAAAAAAAAAAAQIDBAAF/8QAJBEAAgIDAQACAgIDAAAAAAAAAAECEQMSITETQQQiMlEUQmH/2gAMAwEAAhEDEQA/AML00zR6fqDqcFSOalGsXH3Cwb3o/pVpplxY3YikXe+NwxgCqcugWAlaOO6+YckBvOjSkyWziZO9bN6XJGT6VB3OfOrer25tr9osltvmBUMdvK5+WNj+FPXBG+2Pe5kKhc8CukdC6Fb3EEV2dxYjmuci0nLhRE2ScYrpHRVzqdssdsbcLEBySayTUl/FGjG4v+RtYLJbfxVAAU81BFqNrbwOrFQQeee1VbuW7l3YJjX1FCtX09YtGEoP2rMOSfeovFK/2Zb5VykRalH/AKtrCGNsoq5NGrKe00mweW6kjiSPu7nArFlriCZDbSnOMnHlWL6g1yfV7zww5+FiPyKDwx82powclVjOST8N7rnVukXEbyW/jAKcbiuNx9qEad1E0pWCaeeO3bhguCQKyx0+6uLBpfCdgmCoweee9Mhbwsh1Zcd/arRxxQsm2dDXbBe2jWd409vKR8wfj8a1l/DO1qCs2BgVyzS78RypIcMFYMPLNdGvbgS6TDdICYHAIYGp5JJeo5Rf0SGa+t7FYGXxAezA1Cbi+mhESxHA7UXlkEdjA8aEjGTge1MtbsMoJTAY4pHmpcQ6xW6sGC21KZFRuE+tUnt5ppbmOQ5ES59a2ke0Y3djVPwoP11hjJWh/kSGeCJym81wWknhtGzMM+WBWk6bKajoz3jx7WBOA1Dte0m0nuEJmEZOc1oND+AtNCaCOUNjPOe9PkzScVQMeFJuwn0fAZbxy6JgL5CrvU+lJeyRqoAK55rzpGaNd5j5BHepdW1dbWQ71HfHapNycujtJKkEdBtzBYpGcccURcpgKaAaPqclzCQseVJ71PqVxcxQs6p90cGlXgJBcxrnhRSrnbdV6orEAjAPpSp6JWc76UMX+nX5mkaNc8lfpUoe2jJuIpGZM92aqugYOkX4bseP5UzwwNMdBnCnit7lRijGy/Bc213ckKm5/MmpL26SxGfDHb0od09BN81yYW2ZHz4471Y6jfeOOOKT5G5cKaVEsaPqXxl0V8MAqM5xWu6JkmvJ5XlmOASAK5/0q4XUJA37lanpPUo4LzwMc7mpMjk3VjwUa6a/qK4ezhwko71iNc1q6a1SF5DtLV51FrgN9IoXdhz3NCdWk8a2gceZFGONVYNv24G7qT4HpbULlTmR4tiN6FsD+9Tfo06as2so9U1CFZJJifCVxkIgOB+dAOqLmSLpw24YgO6dj6GthpesppWg6cwto3i+GQqTMFP3R2BqCTUOfZshW/TaJYWKD5baMfhQTqLprTNSjJMSxzY+WRRgj/mrOmdRW2o2rTwxspj5ZGxkfl3rP3fWhkvNkpt7KHOMtl2P9AKW3ZbldRz/AFTTrvp2+8K5UtbSHAdexrV6Hqc50qSxYh0ik3geo/zwfxo71HDbav0pcTFo5SiblYJjnyrB9FpLbapFbTtzdA9+R2x/Zaa9o9+iMo6Ol4zrFveSvpaSCLkDAFCIr6ZiRKu0q2eDWhtbfw7VYS3P071ndSUR6h4eAc1N69QsbtE51WaXUIIFYgE80WaAhbshj9319qoaPor3F6szNt2cjiiTI6QXrF87cqanJ+JFl92YjVtGFzPCWc4J55q1HpsdjZSpEh2gZziql1dyCY+JKAFPFHdNv4pdKcSgcjGTVn4hVVl79HreNFLu8hT+rLdpYjtXJz/Kpej2hhSbw8fSn63qaRjaygse1Jb2OdUO6UjMNsFcYNGtRw9pIoH7JrP6bqKGSJQMZ74q1qOqCKTww/fyzXU3EVtWZdrOfcf1c9/SlWnW+j2jJHavK7pKkcU0U7dDv296msCtxBskGFNQaO2zQb1mHGabBcKsIZO1b5+GWH2dOsLOCDoUMFX6j61zrX8biPeukWTK36O0Zj3A/rXM9XkDyMPesf41tu/7L5fEivoHF67+W2rvTUjN1A48gDVPRG/WH48qMdJ6dcNqtxdNGyxgHlh3rVavpB+AbWCz38xH/uGmTSO0UCk8Bqdqz/rs5B/9Q1Xvm+xjK8HNDoIhTqIJNoDPuG5HQAfWt70vo+nan0rpZ1OKMypbqAxweK5ddrKumuHbcCQcVq/0f3PxugyWEUwjubd2O31UnP8AUmpTTUDbhknPp0LSdKsbe3mNlt8Jl25GAPfFRw6VoxmZZAviJyVYD86FwRXU8bRuI7R0+RlWdiGA88bTTTbXMxWG3MCQpy8oDFifQZ/rUL+zc4cDeutaxdPXajw0hGAxJChR6muUSXltD1Tb/A3Ec0cQ3b4zlecMQD+Fan9IF6tl0pc26OS9yyx9/LOSfyH865lo5C3sXucCq4o3FyMuadTUTvTXjs8ZTkEcVSm0+6mm+LIyoParFlcwyxWJwOYgTj6Cj29YbI8cE1mbpWH/AGoHW7yxyQ7VIDcE1XuBItrfDccFv7UcQxu8SDHHNVLuxX4O7YuOSTSSkPXpk10m3nkQyoWJ70ROlRWtqywpwfKo+lr2K9upIn42HHNapkifKnBAqkm0KmjOdKW0gurhckAivOpdOmSaB4zwTyCKM6HHGupXBXscYFR9V+ItxalQRGG+Y11vYV/xCtvY2yWkJEQDYHOKD9VWqQw+NEnz49KNQajbPHHGJFL8cZqDqCaF7N8EEgdqKb1BJdMItze7R9ie1KjCXC7F+UdhSpt2S1RyazH/AE5e48zVK3IFoFNELBf+nrojzbiqNom9O+BW+XhkidVBji/RtB83dV/rXLb5x4rc10zUYoD+j2ELIucJxn3rlupfKWxWT8Zev/pbI+IM9GWYu7+Rs8RDcaPaZrD3OqTW0ShIlUgrjvWP6YvJbe+ZYzgOnNHOmiP9XuXbvg1paVkmuADVf/Fz/wD3NVbpjtjyeAas6ncLJdy4HG81ZsentV1lk+DspWj7mVhtQfie/wCGaKQq4VpW+JtJNvZVobp11d6deLc2Dss6EY2jO7PkR559K30HRV3Zxn4ie1QHgoCWJ/IUX6D6GVNfS+u5VkhhBfwyuBkeZ59cUYwb5RTdLoXsriG7son1W08G8RQsqA52t5jNOvtRgSEQ2kRH4cVa1a3t21S4udOkW4huSpkEfzbJMY49QcDtVvT+l2mImvW2R/sxqeW+p8v61llhm5uKR6MPyIqGzZita6dveorMW9so3iVWeRjhUUd+efLyrn91pc2i6ikUpEgLbkkAxnB9K+gtbeKzshYWyiNX4IXgAf8AJrI6rodlqkHhXav9md4eM4IPlitccGsNbMM8+2TYsdGp8YLQsMr8Op4rXasngWanHyhqEaDpo0aGJbO4LhY9oEw5/MD39KtandahLZ+E1p4hznMTbv8ANefkwTXqNEcsW+BS1jjKLJgZxxQzVpANKumBxyRmhMnWPwyfDNbOHUHORjFANR6pkn0icKhCsxHP1qTxSdFPkirArX66NE88U2ZDRXp/r+2WExX5bxGPBrmF9IXuXJ8zmq24Z8+PStvwp+mT5mnw7zo+rxF3uoiSp8qy/XHXUk8vw1um0Ke5rPdLXtwLZ1Ztw5xVPqGKE+HIyYdzzSRxLa2NPJcaQW6L1a7u+oU8WYlQp4qxrHUF7Bqd1F4h2b8DmhnQCAdQZUdoyao9QEtq91j9+r6Royubs0EetXGxfmXsPOlWfRyEUe1eVD40PsyaxyvTtwCP2v70LkJS2JU4NGGkQdPygdw4oHcHNquPM1sJxLOm393KgtXndoF5CZ4rzUgQefOq+lqxdtvepb0MHG8k0KSfBnetj9Ej/Xs/wmjHTasNWusnjaaF6MCLnd2+WinTpY6jdNggbTzQ5YXeo7pXS11PqVY5UDQRO00m4ZGAfP6kgV1iSQkqh77eee1ZronThZaNLeSf7t5IzduyA4A/qfxrQQnNy5IHAya0QjRJso6iTCu45Zs4VcZGati2a5ji0qIti5ZFkIP7AyW/PFeWRaeSd2ztEvAPlwP8UY6chE2qSTbcCGMhfYn/ABn86p50AR0zQ7extvAh+VOwIH/NWlY2lvJJM26Pkgn69qvkKV2Y4IrN69fmeXwYv9uM49iaS7Y7Aep3Usshm8GSQs3HhjJH5+VNtodw3TjaxO5hnt6CkWcuIYP908sxGRGPX3PoKmyFZYIs8cu2c8+ZogLJfB47Z4p9pPI8wVIgw9+BQ1Z2uJJBGFESsVLtyBg9vc9/yq7p90RcRiISyHcOQuKWXgy9IerltY0WSdNlwcxkN3Py57+Y5rm90sTaVJGso3CQnv71uP0vSbbrSMvtQxSMV9Tlf+a54LmDw2BUHmsOn7WabpGYaIC7YTghT50swRoyBM+hrSMlrIpD45qhNaWzuY4vmPliqCNNKyz0zPtidlUfKe1VupJjK6H3q5pFlLapIrIcHtVLXI9pXI7Ggl071F/9HmTrjk8YiobrrH/Vbk//ACGj3QcAXVpWGRiL096CdQRML+d8HBkPlVGv1M7VspeN7GlTB2pVOh6YWS1mOiyoV5Z8/wA6qPp8zW6qEFdOGk2zR7CML3r2PSbWI/d3A1o1ZOzm2nafNA7Myg5pXNlLcyfKvYjNdDuNIjcERcZptt08mOG+Yml07Y2/KMtZ2XgeF8nOOaM6ZaK0skUMSiRxgcUWvtBntYgQNxI4qbp2ynivJJp0wET5fqaVY7kNvygncQLb2scERAEYVMewFNhJZblxgZbAINSXzHwj58+de2w/VxwGLOTkVq8JklnD4UPuxJzR7pdPsZX4+Zzz9OKB5GweXBPNHNLBi6fmdCVyH2t+J/zRfUcl0fquprHG4hcszfLuXnA86y8pMrmKA+zv+7/n2qWZ3aQRRkBm7EjhAPOpIhHbx4UthfU5J9zQpBGqqWsO1Bx3JPmfU0PNw6wSzqTufKpz55xUl1cZDZGCM5PtVTfuls4IssWYuQO5wMdvqa5hX9F6GJUgSOJQFUYA27iff2+p70V0gA3O5pBEQccEscfQDFVlCEAMQufI/wB61XT1o8NsGZhlucKuBU8jpDwXTln6aJ/+obCHJKLZblPqWds//kVhbOFXtnb+KtZ+lWOe763uiikpBFFEuPIbdx/mxrMQxSxWhJU/MxxWSpGi4lGYlZWVT59q9s2CThtuSPao5ba48csEfBOe1XNNjk8Vi8J/EUUmnYZTg40FRqDMyheAPahuoAv4crjI35Iq8bduXC4p/wAKDFGG5PvRb7ZK1QU6PvIJb2XZGFKxc8Vntfvo53mjVMNvPYVqul7FIrid8AZSgt5psfjvJtzljzVW7RBVsZfwG968rTiyjx2pVMezoAiXyINOEa+ak0k4/ZwKesnPy1pIDkjU/s4qRY8ciku4+Yr0g/viuOHPJK2N7bsV58ZZxyC3nuUWUsBsAyfx9KYFJYDcSD3xRG2jjjUhEVC3fOOfr61nzZNOI1/j4t7b8AmtLJBC4G3DDKuDxn+xpiXKeGu0fLjGA2McUZvbHx0IZQQaw+s/EaBNGgHjpM2I4j94Hzx6jkfiRRxZnLjGy4VHqD6XakkZzznH1osdRROmUBbH2pQ8+hOf6UPh0L4eRFupi02weIi/dRj3GfM/lTrnS7WS1kga4lWKRiduRwSMGtSXDM30gguY/DM7N8z4I9h5ClNcqQdr5Hbj1pjaU7zbVlVYlbCgjJOP5V4NJSSXZ48giwCD3J5/7/OuR3pWnukCtn1wPPPtRbTrUWgE9wNty6bQuP8AbU+X17ZqC30uxgl3lDJIuCN7Z2HyOKlilYO0ZOGblT3B+gpZRv0aMtVwILGzBjGofA5AwT+XetdoYIsY1OcgedYFt7SRlC3iN2I4NdAhMtrpe6eRpHSIks3cnHap5foMPDm/UNi0+qX94BuDyNj+lZw2Dm3RPCJO7tit64zndg+uai8OPIOxciu1J2ZldM+QAwDtzSGnBeTD+QrU7f4RT0VR3ArtQGNmsVUD5Aoz2NVLy1QTRgCtzdWUNyuGGPpQu50SN5AS5GO3NK4DWUdJthEJiPNcUImtvEQrnnJrUxWPhBwr/eHFVBpDbjuYH0FNrwnfTNDT3x94Uq0R0t88ClS6sOwETXbyEhZoicUQt9ehYfaRkHzqSO+064OHKg+jDFWPgLCZTtAwfNTVDh8OqWkvCtg/WrSvE/3Xz+NCJOnIWOYJWU02PQ9QtyTFLu9OaJwZmWVYWeEB5FGVXOAx9KBQaZdtOtzJfTvdjksrEIvsB5irdqdSjmEV3EfDOQX9OKIrIqJwOPXPal0i3bKwySSpDrbWby1XF7A0gx/uRDP8qAarqkWodbdOzLGWihaT5HUgbgNyn8wD+FG/iN5+QfKB5+dDdYMUETXzQNM1qPEUDv8AlSLEoy2TKPM5R1aDxmLFmc7nY5JNRSSHaTyeO1ZxOp7YX0VkxIeaPxI/Q/54ol8fGyfNzz2xVtkS1CAuPtWVuQTlee1RvIYS27JjLbiR+yf71RadGGduMDgivDcmNvlYMhP512x2oSaT7Pk9h3xnIqOQjIYHkeZoal34RGzlPNR2pwvYWO3hfbNDZDamu6TWO5RxLGGMbh1c/wBKLdRXO2BbaP7znc3sBQjpi5SGweYr9kp5P7zegqO4mmupnmkIyx7DyFSj2TYZuo0RZHmOaW5fIU7bxyK8LAdxVCIgzHtXo3edNLgDgGmNK/kpx6muOJweKYxj86gLE9zXoRye1EA8rGfu8Ugi/vUvDPnTlVR2FcAW1aVOxXtE4wcmjwOcxTEfWlHpWowAtBJvUduarxXlzDxJCXHmaLWmpQyLlSyEdwaASsmp6hbECVTx6iidtrjuVVouT6VNHKkoy4V1+lSpBasc+Hg+WBXHHv8Aq9uSYpsrkYwfOqvw+5iba4jkQ9kfuPxpmo6QLpt8coVh5GhZ0u/tcshJX+E1wU2gt8R4LhZ0aNvIcYp/irIpVcfPweaD6rOttpkck/2lwTtjizks/kPp6+1VLeHULWCMC5MjgZff60rk0VSsvX2iNK8csUmx0BKkAHH51SbStUzxeEj12j09hVqPVZoztuEwQMjPIzUia9aNGyhlDYxhSODS/qxulSaCezsLe4mu2JnlZVAXyA5J/HFUG1VFI2ytKwP7Kmq0lxeahFHYXF3HcLbyMw8MEbQfI8/yq6toqQhdoA7ZApHB3aY6kkqaIf8AVrhsKkDKvqTnNTwSTy7c5IzyDxmrEdgFIG45PlxV+1tdjg7l2/xCjqxbRpdKkmNmzSoERUChVPy9x2GeKlaZhyBn2Fe28cjaXLsdDheQBjnPrmqTXTQr8yZIowf0Jk9RcEkhXOK8EhU/MM0Pj1+3L7JAVPqatLqVm/JkSqEi4koP7FOILd+1VVvbYj5JAfoaetxu+72rjiYRqB2p2cVCZ/WmtcZHAonE5f8AGozJg9qqtMc/NkCnLMnrXALG+lUPip60q4Bn7eFCMnmrBtLfGPCXn2pUqJxVuIlgXEWV+hqpHfXCNgPkZxzSpUrGC9vcSSKu40RhPAPnSpUUcQSwRSzmR41L5+9jnvVBgODgZPFKlXDoq3UKeEDjluM+mWAyPzoVd6baW87wRwrsR9oz6UqVBpUMmT2sEUJVY0ABxnirTRqxCnONxFKlQCyHSpZGupLd3LIqbgSeR7ZojGcvg8jFe0qKAaLTf/LQDzv4bPuaCXsCxsSrOM54zXtKlh6zsv0Zq8+WXGSfrT1UGLtSpV32Ii5bWUTQ7wXVvUNUb3txayBY5WI/iOaVKuOL9tqNw+AxU/hRKGZ27mlSqhN+k284qGU5QmvaVAJVx7n86VKlXBP/2Q==" class="img-fluid rounded-3" width="50" height="50" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Chandru</h4>
                                              <h6 class="my-2 text-center text-muted">" Associative Web Developer "</h6>
                                              <p class="container text-center pb-3 d-none d-md-block port-color">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-4 col-md-4">
                                          <div class="d-flex flex-column align-items-center ">
                                            <div class="person-border">
                                              <img src="data:image/jpeg;base64,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" class="img-fluid rounded-3" width="50" height="50" alt="...">
                                            </div>
                                            <div class=""> 
                                              <h4 class="text-center pt-3" style="color:white">Sam</h4>
                                              <h6 class="my-2 text-center text-muted">" Associative Web Developer "</h6>
                                              <p class="container text-center pb-3 d-none d-md-block port-color" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            </div>
                                          </div>
                                        </div>

                              
                                      </div>
                                      
                                     </div>   
                                      

                                      end -->
                                     
                                    
                                    </div>
                                    </div>
                          <!-- end -->                     
                        </div>

                    </div>
                  </div>
                <!-- </div> -->
            </section>
                      
             <!-- content block -->
             <section>
                 <div id="content-block" class="container py-4 rounded ">
                   
                        <div class="d-flex flex-column align-items-center">
          
                         <div class="h3 p-2 mb-3 shadow rounded content-head">What We Offer</div>

                         <div><p class="container text-center content-head-2">The principles of content design, such as tracking a user journey, are invaluable when designing an online ecommerce experience. Deliveroo is one of the biggest food delivery apps in the world, and one reason for their success is their focus on content design and user experience..</p></div>

                          <div class="container content-back shadow">
                             <!-- <div class="d-flex flex-column  d-lg-flex flex-lg-row justify-content-lg-around"> -->
                              <div class="row mx-3 ">
  
                              <div class="mx-auto col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 my-2 ">
                              <div class="ct-1 ">
                                    <div class="card my-2  border-dark shadow" >
                                      <div class="card-body ">
                                        <!-- <h5 class="card-title fs-4">Web Design</h5> -->
                                        <h6 class="card-subtitle my-2  text-warning fs-4">Visual Design</h6>
                                        <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="" data-bs-target="#slide-block" data-bs-slide-to="1" class="card-link bottom-1 text-decoration-none">Details</a>
                                        <!-- <a href="#" class="card-link">Another link</a> -->
                                      </div>
                                    </div>
                                  </div>
                              </div>

                              <div class="mx-auto col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 my-2 ">
                                  <div class="ct-1">                                 
                                    <div class="card my-2  border-dark shadow">
                                      <div class="card-body">
                                        <!-- <h5 class="card-title fs-4">SEO</h5> -->
                                        <h6 class="card-subtitle my-2  text-warning fs-4">SEO</h6>
                                        <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                                        
                                        <a href="#" data-bs-target="#slide-block" data-bs-slide-to="2" class="card-link bottom-1 text-decoration-none">Details</a>
                                        <!-- <a href="#" class="card-link">Another link</a> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              <div class="mx-auto col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 my-2 ">
                                  <div class="ct-1">
                                    <div class="card my-2 border-dark shadow" >
                                      <div class="card-body">
                                        <!-- <h5 class="card-title fs-4">Online Shop</h5> -->
                                        <h6 class="card-subtitle my-2  text-warning fs-4">E -commerce</h6>
                                        <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" data-bs-target="#slide-block" data-bs-slide-to="3" class="card-link bottom-1 text-decoration-none">Details</a>
                                        <!-- <a href="#" class="card-link">Another link</a> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              <div class="mx-auto col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 my-2 ">
                                  <div class="ct-1">
                                    <div class="card my-2 border-dark shadow" >
                                      <div class="card-body">
                                        <!-- <h5 class="card-title fs-4">Social Media</h5> -->
                                        <h6 class="card-subtitle my-2  text-warning fs-4">Platform</h6>
                                        <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" data-bs-target="#slide-block" data-bs-slide-to="4" class="card-link bottom-1 text-decoration-none">Details</a>
                                        <!-- <a href="#" class="card-link">Another link</a> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>




                             </div>
                          </div>
                      </div>

                  </div>
             </section>
           
      

            <!-- photo slide -->
      <section id="testimonial">
        <div class="pt-3 pb-4 shadow testimonial-area">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="section-header text-center">
                  <h4 class="">Testimonial</h4>
                  <p class="text-muted">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur tempora doloremque ab? Molestias culpa consectetur, soluta quae a suscipit omnis"</p>
                </div>
              </div>

              <div class="col-sm-12">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>


                      <div class="carousel-inner" >

                                      <!-- start -->
                                      <div class="carousel-item active">
                                        <div class="content text-center">
                                        
                                        <div class="d-inline-flex">
                                          <div class="person">
                                          <img src="data:image/jpeg;base64,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" alt="dev">
                                          </div>
                                        
                                          <!--<div class="person">
                                            <img src="quality_restoration_20240811123917015.jpg" alt="dev">
                                          </div>-->
                                                                                
                                        </div>
                                      
                                        <h5>Sam</h5>
                                        <h6>Web Developer</h6>
                                        </div>
                                        </div>
                                      <!-- end -->

                                      <!-- START -->
                                      <div class="carousel-item">
                                        <div class="content text-center">
                                                                  
                                        <div class="d-inline-flex">
                                        <div class="person">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFFcJ9FRycKUsCCNrUi1NY4OlKlMySGj0nZg&s" alt="dev">
                                        </div>
                                        </div>
                                        <h5>Jose</h5>
                                        <h6>Software Developer</h6>
                                        </div>
                                        </div>
                                      <!-- END -->

                                      <!-- START -->
                                      <div class="carousel-item">
                                        <div class="content text-center">

                                        <div class="d-inline-flex">
                                        <div class="person">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNm6BkgT87_Fus1KSC2Bti9okSzIM0kOd5Pw&s" alt="dev">
                                        </div>
                                        </div>
                                        <h5>Nobily</h5>
                                        <h6>Backend Developer</h6>
                                        </div>
                                        </div>
                                      <!-- END -->
                            </div>

                            </div>
                        </div>
                      </div>
                    </div>
        </div>
      </section>

 
  </main>

  <!-- About US -->
  <section class="page-section-about my-0" >
    <div class="container p-4">
        <div class="text-center">
            <h2 class="mb-2 section-heading text-uppercase">About</h2>
            <h3 class="mb-3 section-subheading">Designer World</h3>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-dark">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum dicta necessitatibus similique. Explicabo, id. Delectus libero voluptas alias, repudiandae quis fugit corrupti error perspiciatis nam provident reiciendis illo consectetur quidem doloribus ullam eligendi. Dicta magni dolorum ab vel ullam porro, sapiente error maiores magnam officia fugit temporibus quasi rem odio unde molestiae suscipit debitis voluptate praesentium tempore, placeat repellat. Maiores dolor eius inventore provident eaque dicta voluptatum maxime reiciendis voluptates voluptas eum necessitatibus aliquam architecto, hic adipisci quidem! Sequi est, mollitia molestiae perferendis numquam, blanditiis pariatur tempora odio voluptate optio tenetur adipisci? Culpa iusto maiores optio vero accusantium quas corporis.
            </p>
          </div>

        </div>
        <div class="row text-center  my-5">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="data:image/jpeg;base64,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" alt="..." width="40" height="40" />
                    <h4>Christopher</h4>
                    <p class="text-muted">Founder</p>
                    <a class="btn btn-dark btn-social mx-2 shadow-none" href="#!" ><i class="fab fa-twitter "></i></a>
                    <a class="btn btn-dark btn-social mx-2 shadow-none" href="#!" ><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2 shadow-none" href="#!" ><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="data:image/jpeg;base64,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" alt="..."  width="40" height="40"/>
                    <h4>Jeba</h4>
                    <p class="text-muted">Co-founder</p>
                    <a class="btn btn-dark btn-social mx-2 shadow-none" href="#!" ><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2 shadow-none" href="#!" ><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2 shadow-none" href="#!" ><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="data:image/jpeg;base64,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" alt="..." width="=40" height="40"/>
                    <h4>Joy</h4>
                    <p class="text-muted">CEO</p>
                    <a class="btn btn-dark btn-social mx-2 shadow-none" href="#" ><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2 shadow-none" href="#" ><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2 shadow-none" href="#" ><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
        </div>
    </div>
</section>

  <!-- contact us -->
            <section class="contact-section py-2  my-0" >
              <div class="container py-2" id="target">
                  <div class="text-center">
                      <h2 class="contact-heading text-uppercase">Contact Us</h2>
                      <h3 class="my-3 contact-subheading">Please fill up the form below to send us a message . We will contact you very soon</h3>
                  </div>
                  <form id="contactForm" autocomplete="off">
                      <div class="row align-items-stretch mb-0">
                          <div class="col-md-6">
                              <div class="form-group mb-2">
                                  <!-- Name input-->
                                  <input class="form-control shadow-none" id="nameC" type="text" placeholder="*Your Name" />
                              </div>
                              <div class="form-group my-2">
                                  <!-- Email address input-->
                                  <input class="form-control shadow-none" id="emailC" type="email" placeholder="*Your Email" />
                              </div>

                              <div class="form-group mb-md-0">
                                  <!-- Phone number input-->
                                  <input class="form-control shadow-none" id="phoneC" type="tel" placeholder="*Your Phone" onkeypress="return (event.charCode>= 48 && event.charCode<=58)" maxlength="10"/>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group form-group-textarea mt-2 mt-sm-2 mt-md-0 mb-md-0">
                                  <!-- Message input-->
                                  <textarea class="form-control shadow-none" id="messageC" placeholder="*Your Message "></textarea>
                              </div>
                          </div>
                      </div>

                      <div class="d-block row text-center my-1"><span id="eror" class="showError" style="color:#000"></span></div>

                      <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase shadow-none" id="submitButtonC" type="submit">Send Message</button></div>
                  </form>
              </div>

          </section>

    <footer id="footer" class="fixed-bottom-0  text-secondary pt-5 pb-4 ">

      <div class="container text-center text-md-left shadow rounded footer-block">

        <div class="row text-center text-md-left ud">

          <div class="col-md-12 col-lg-3 col-xl-3 p-3 ms-md-auto" >
      
                <p class="h6 text-center text-uppercase und" style="color:tomato"><i>Designer World</i></p>
                <div class="container text-center">
                <p class="p-3 form-text">Design is a discipline of study and practice focused on the interaction between a person and the man-made environment, taking into account aesthetic, functional, contextual, cultural and societal considerations. As a formalised discipline, design is a modern construct.</p>
            </div>
          </div>

          <div class="col-md-3 col-lg-3 col-xl-3 p-3 ms-md-auto ">
            <p class="h6 text-uppercase text-center mb-3 und" style="color:tomato"><i>Page</i></p>
          <div class="justify-content-center">
            <p><a href="" class="text-decoration-none text-muted">Home</a></p>
            <p><a href="" class="text-decoration-none text-muted">About</a></p>
            <p><a href="" class="text-decoration-none text-muted">Contact_us</a></p>
            <p><a href="" class="text-decoration-none text-muted">Product</a></p>
            </div>
        </div>

        <div class="col-md-3 col-lg-3 col-xl-3 p-3 ms-md-auto ">
          <p class="text-uppercase text-center mb-3 und" style="color:tomato"><i class="h6">Community</i></p>
          <div class="justify-content-center">
          <p><a href="#" class="text-muted" style="text-decoration:none">Github</a></p>
          <p><a href="#" class="text-muted" style="text-decoration:none">Icon Request</a></p>
          <p><a href="#" class="text-muted" style="text-decoration:none">Blog Awesome</a></p>
          <p><a href="#" class="text-muted" style="text-decoration:none">Github</a></p>
        </div>
      </div>

      <div class="col-md-3 col-lg-3 col-xl-3 p-3 ms-md-auto ">
          <p class="h5 text-uppercase text-center  mb-3  und" style="color:tomato"><i>Conatct</i></p>
          <div class="justify-content-center justify-content-center-">
          <p><span class="material-symbols-outlined align-top me-2 fs-4">home</span>Home</p>
          <p><span class="material-symbols-outlined align-top me-2 fs-4">mail</span>Designer.com</p>
          <p><span class="material-symbols-outlined align-top me-2 fs-4">call</span>+91 000 000 0000</p>
          <p><span class="material-symbols-outlined align-top me-2 fs-4">print</span>04536 0000</p>
        </div>
      </div>



        </div>

        <div class="row text-center mt-3  ud">

          <div class="col-md-7 col-lg-6">
            <p class="text-dark"> copyright &copy All reserved by.<a href="" class="text-decoration-none und"><i>Designer World</i></a></p>
          </div>

          <div class="col-md-5 col-lg-4">
            <ul class="list-unstyled list-inline">

              <li class="list-inline-item"><a  href="" class="text-dark"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a  href="" class="text-dark"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a  href="" class="text-dark"><i class="fab fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a  href="" class="text-dark"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="list-inline-item"><a  href="" class="text-dark"><i class="fab fa-youtube"></i></a></li>
            </ul>


          </div>

        </div>


      
    </footer>

      <!-- jquery  -->
      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      

      <!-- <script src="Design_world.js"></script> -->
      <!-- <script src="animate.js"></script> -->
      <!-- <script src="Sign_Up_Validation.js"></script>
       -->
      <script src="Js/Chat_Index.js"></script>

</body>

</html>
