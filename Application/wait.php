<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="icon" href="llogo-removebg-preview.png">
    
    <link rel="stylesheet" href="Header-Footer.css">
    <link rel="stylesheet" href="error.css">
    <link rel="stylesheet" href="mainPage.css">
    <link rel="stylesheet" href="chat.css">

</head>
<body >
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
                  
                    <!-- <li class="nav-item"> -->
                    <!-- <a href="#body" class="nav-link underline">Home</a> -->
                   <!-- </li> -->
                 
                   <!-- <li class="nav-item"> -->
                    <!-- <a href="#portfolio-block" class="nav-link underline">Portfolio</a> -->
                    <!-- </li> -->
                  
                   <!-- <li class="nav-item"> -->
                    <!-- <a href="" id="about" class="nav-link underline">About</a> -->
                  <!-- </li> -->
                
                   <!-- <li class="nav-item"> -->
                     <!-- <a href="" id="contact"  class="nav-link underline">Contact</a> -->
                   <!-- </li> -->
                 
                   <li id="logoutvalidation" class="nav-item ">
                    <a href=""  target="_self"  class="nav-link text-white box-color" data-bs-toggle="modal" data-bs-target="#logout">
                         Log Out
                     </a>
                  </li>
                
                  </ul>
                </div>
              
              </div>
          </nav>      
        </header>


      <!-- Modal -->
      <div  class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Log Out </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                     You want to Leave our page
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">No</button>
              <a href="logout.php" ><button id="logout-close-btn" type="button"  class="btn btn-primary shadow-none logout">Yes</button></a>
            </div>
          </div>
        </div>
      </div>

                 <!-- Page Content  -->
                 <div class="container chat">
            <div class="row chat-inner">

            <!-- first col -->
              <div class="col-sm-4 side">
                <div class="side-one">
                  <div class="row heading">
                    <div class="col-4 col-sm-6 col-md-5 col-lg-3 col-xl-3 heading-block">
                        <h3 class="fa-2x">Chats</h3>
                    </div>

                    <div class="dropdown col-1 col-sm-1 col-xl-1 ms-auto" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i class="fa fa-ellipsis-v  fa-2x"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" aria-hidden="true"></i>

                      
                      
                      
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>

                    </div>

                  </div>
          
                  <div class="row searchBox">
                    <div class="col-sm-12 searchBox-inner">
                      <div class="form-group has-feedback">
                        <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
                        <span class="form-control-feedback"></span>
                      </div>
                    </div>
                  </div>
          
                  <div class="row side output_user_1">
                      <!--  content show via chat.php -->
                  </div>

                </div>
            </div>
            <!-- first col end-->



            <!-- second - col -->
            <div class="col-sm-8 conversation conversation-inner">
              <!-- 1 row-heading -->
              <div class="row heading output_user_2" >
                <!--<div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
                  <div class="heading-avatar-icon">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                  </div>
                </div>
                <div class="col-sm-8 col-xs-7 heading-name">
                  <a class="heading-name-meta">John Doe
                  </a>
                  <span class="heading-online">Online</span>
                </div>
                <div class="col-sm-1 col-xs-1  heading-dot pull-right">
                  <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
                </div>-->
              </div>
              <!-- 1 row-heading end-->


              <!-- message row start-->
              <!--  message row end-->




              <!-- last-row Send Text-area start-->
              <div class="container row h-auto p-2  sendArea">
                <div class="col-sm-1 col-xl-1  m-auto">
                  <i class="fa fa-smile-o fa-2x"></i>
                  <!-- <span class="material-symbols-outlined">mood</span> -->
                </div>
                <div class="col-sm-9 col-xl-8 m-auto reply-main">
                  <input class="form-control shadow-none" rows="" id="comment">
                </div>
                <div class="col-sm-1 col-xl-1 m-auto reply-recording">
                  <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
                </div>
                <div class="col-sm-1 col-xl-2 m-auto reply-send">
                  <!-- <i class="fa fa-send fa-2x" aria-hidden="true"></i> -->
                  <span class="btn btn-sm px-0 btn-dark">SEND</span>
                </div>
              </div>
              <!--last row text-area end -->

            </div>
            <!-- second - col end-->


           </div> 
          </div>




        <!-- jquery  -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
        
  
        <!-- <script src="Design_world.js"></script> -->
        <!-- <script src="get.js"></script> url getting-->
         <script src="chat.js"></script>
  
  


        </body>
</html>