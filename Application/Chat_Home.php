<?php
    //session_start();

    //if ( (!isset($_SESSION['id'])) || ($_SESSION['id'] == '') )
    //{
        // echo "<script>location.href='CHAT_APPLICATION_Index.php'</script>";
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICATION</title>

    <!-- favi icon -->
    <link rel="icon" href="llogo-removebg-preview.png">

    <!-- google font icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- font-awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
    <!-- my css file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Header-Footer.css">
    <link rel="stylesheet" href="CSS/error.css">
    <link rel="stylesheet" href="CSS/mainPage.css">

    <!-- <link rel="stylesheet" href="model2.css"> -->
    <link rel="stylesheet" href="CSS/chat.css">
    <!-- <link rel="stylesheet" href="newchat.css"> -->

    <style>

      .card {

            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }
        .me-2 {
            margin-right: .5rem!important;
        }

        .sidebar {
            position: relative;
            top: 0;
            right:0;
            bottom: 0;
            z-index: 100;
            height: 100%;
            background-color: #f8f9fa;
            border-right: 1px solid #ddd;
            transition: transform 0.3s ease-in-out;
        }
        .sidebar.hidden {
            /* transform: translateX(-100%); */
        }
        .sidebar-content {
            padding: 15px;
            height: 100%;
            overflow-y: auto;
        }
        .content {
            margin-left: 220px; /* Adjust this based on the width of your sidebar */
            padding: 20px;
        }
        .content.with-left-sidebar {
            margin-right: 300px;
        }
        .btn-toggle {
            position: absolute;
            top: 20px;
            left: 0px;
            z-index: 200;
        }
    </style>



</head>

<body>

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
           <div class="container-fluid chat">
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
          
                  <div id="output_1" class="row side h-auto output_user_1">
                      <!--  content show via chat.php -->
                  </div>

                </div>
            </div>
            <!-- first col end-->



            <!-- second - col -->
            <div class="col-sm-4 conversation conversation-inner"  id="col-increase">
              <!-- 1 row-heading -->
              <div class="row heading output_user_2" id='toggle-sidebar-1'>
              <!-- <button class="btn btn-primary btn-toggle w-25" >  Toggle Sidebar 1</button> -->

                <!-- comment area 
              <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar" >   
                    <div class="heading-avatar-icon" id="toggle-sidebar-1">
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
                  </div> 
                 comment area -->

              
                </div>

              <!-- 1 row-heading end-->


              <!-- message row start-->
                    <div class="chat-body" id="chat-body-content">
                      <!-- comment area 
                         <div class="message sent h-auto"> 
                            <div class="text">Hey! How's it going?</div>
                        </div>
                        <div class="message received h-auto">
                            <div class="text">Hi! I'm good, thanks. How about you?</div>
                        </div>
                           comment area -->
                    </div>
              <!--  message row end-->




              <!-- last-row Send Text-area start-->
              <div class="container row h-auto p-2 ms-auto  sendArea">
                  <div class="col-sm-1 col-xl-1  m-auto">
                  <i class="fa fa-smile-o text-center fs-5 fa-2x"></i>

                </div>
                <div class="col-sm-7 col col-xl-9 m-auto reply-main">
                  <input class="form-control shadow-none" placeholder="Type any text..." id="comment" name="type_message" >
                </div>
                <div class="col-sm-3 col col-xl-2 m-auto reply-send">
                  <span class="btn btn-sm px-0 btn-dark" id="msg-send">SEND</span>
                </div>
              </div>
              <!--last row text-area end -->

            </div>
            <!-- second - col end-->
            
            <!-- third column only use for toggle -->
     
            <div class="col-sm-4 conversation conversation-hidden  o" >
     
            <!--  -->
  <div class="containerr output_user_3">
		<div class="man-body">
			<div class="row">
				
				<div class="col-12 ">

        <div class="row bg-white">
          <div class="modal-header">
            <h5 class="modal-title">Contact Info</h5>
            <button id="toggle-sidebar-2" class="btn shadow-none p-0" aria-label="Close">
              <span class="fs-4" aria-hidden="true">&times;</span>
            </button>

           <!-- <button class="btn btn-primary btn-toggle" >Toggle Sidebar 1</button>  -->

          </div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-12">
          <div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4>John Doe</h4>
									<p class="text-secondary mb-1">Full Stack Developer</p>
									<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
									<button class="btn btn-primary">Follow</button>
									<button class="btn btn-outline-primary">Message</button>
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
									<span class="text-secondary">https://bootdey.com</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
									<span class="text-secondary">@bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
									<span class="text-secondary">bootdey</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
									<span class="text-secondary">bootdey</span>
								</li>
							</ul>
						</div>
					</div>
      </div>

					
					<div class="row">
						<div class="col-sm-12">
              <div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="John Doe">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="john@example.com">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="(239) 816-9029">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Mobile</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="(320) 380-4539">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="Bay Area, San Francisco, CA">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="button" class="btn btn-primary px-4" value="Save Changes">
								</div>
							</div>
						</div>
					</div>
				
						</div>
					</div>
<!--  -->
          



			</div>
		</div>
</div>


      			</div>
            <!-- third column only use for toggle end-->

          </div> 
          </div>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="Js/Chat_Home.js"></script>
    <script>

      $('.conversation-hidden').hide();
      $('#col-increase').removeClass("col-sm-4");
      $('#col-increase').addClass("col-sm-8");


      $('#toggle-sidebar-1').on("click",function()
      {
          $('.conversation-hidden').show();
          $('#col-increase').removeClass("col-sm-8");
          $('#col-increase').addClass("col-sm-4");
      });

      $('#toggle-sidebar-2').on("click",function()
      {
          $('.conversation-hidden').hide();
          $('#col-increase').removeClass("col-sm-4");
          $('#col-increase').addClass("col-sm-8");
      });


    /*document.getElementById('toggle-sidebar-1').addEventListener('click', function() {
        document.getElementById('toggleable-sidebar-1').classList.toggle('hidden');
        document.getElementById('main-content').classList.toggle('with-left-sidebar');
    });*/



</script>

</body>
</html>

