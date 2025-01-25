<?php

    session_start();

    if(isset($_SESSION['id']))
    {

        /*$servername = "localhost";
        $username = "training";
        $password = "training";
        $dbname = "training";*/

        // $servername = "localhost";
        // $username = "root";
        // $password = "1111";
        // $dbname = "rifluxyss";
        include('database.php');



    try 
    {
        $id = $_POST['id'];

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare('SELECT * FROM sign_up WHERE id ='.$id); 
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($results) 
        {
                
                echo "<div class='col-sm-2 col-md-1 col-xl-3  heading-avatar'  data-id='".$results['id']."'>";
                // echo "<div class='heading-avatar-icon'>";
                echo "<div class='avatar-icon' >";
                echo "<img class='img-fluid' src='".$results["image_name"]."'  alt='user'> ";
                echo "</div>";
                echo "</div>";
                echo "<div class='col-sm-8 col-xl-7 heading-name'>";
                echo "<a class='heading-name-meta'>".$results['firstname']."</a>";
                echo "<span class='heading-online'>Online</span>";
                echo "</div>";
                echo "<div class='col-sm-1 col-xl-1  heading-dot pull-right'>";
                echo "<i class='fa fa-ellipsis-v fa-2x  pull-right' aria-hidden='true'></i>";
                echo "</div>";
                echo "</div>";

                //
                /*echo "</div>";
                echo "</div>";
                echo "</div>";
                //<!-- first col end-->


                //<!-- 1 row-heading -->


                //<!-- second - col -->
                echo "<div class='col-sm-4 conversation conversation-inner'  id='col-increase'>";
                echo "<div class='col-sm-2 col-md-1 col-xs-3 heading-avatar' > ";
                echo "<div class='row heading output_user_2' id='toggle-sidebar-1'>";
                echo "<img src='https://bootdey.com/img/Content/avatar/avatar6.png'>";
                //<!-- <button class="btn btn-primary btn-toggle w-25" >  Toggle Sidebar 1</button> -->
                echo "</div>";
                                            //<!-- comment area 
                                            //<a class="heading-name-meta">John Doe
                                              //  <div class="heading-avatar-icon" id="toggle-sidebar-1">
                                                //<span class="heading-online">Online</span>
                                                //</div>
                                                //<div class="col-sm-1 col-xs-1  heading-dot pull-right">
                                            //<div class="col-sm-8 col-xs-7 heading-name">
                                            //</div> 
                                              //  </a>

                                            //</div>

                                              //  <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
                                            //comment area -->

                                        
                                        //<!-- message row start-->
                echo" </div>";
                // <!-- comment area 
                // <!-- 1 row-heading end-->
                echo "<div class='text'>Hey! How's it going?</div>";
                echo "<div class='message received h-auto'>";
                echo "<div class='chat-body' id='chat-body-content'>";
                echo "</div>";
                echo "<div class='message sent h-auto'> ";
                echo "</div>";
                echo "</div";
                echo "<div class='text'>Hi! I'm good, thanks. How about you?</div>";
                //comment area -->";


                //!-- last-row Send Text-area start-->
                //<!--  message row end-->
                echo "<div class='col-sm-1 col-xl-1  m-auto'>";

                echo "<div class='col-sm-7 col col-xl-9 m-auto reply-main'>";
                echo "<div class='container row h-auto p-2 ms-auto  sendArea'>";
                echo "</div>";
                echo "<i class='fa fa-smile-o text-center fs-5 fa-2x'></i>";
                echo "<span class='btn btn-sm px-0 btn-dark' id='msg-send'>SEND</span>";
                echo "</div>";
                echo "</div>";
                echo "<input class='form-control shadow-none' placeholder='Type any text...' id='comment' name='type_message' >";

                echo "<div class='col-sm-3 col col-xl-2 m-auto reply-send'>";
                //<!-- second - col end-->
                echo "</div>";
                //<!-- third column only use for toggle -->
                //<!--last row text-area end -->
                                        
                echo "<div class='man-body'>";
                echo "</div>";
                                    
                echo "<div class='col-sm-4 conversation conversation-hidden o'>";

                echo "<div class='containerr'>";
                echo "<div class='modal-header'>";
                echo "<div class='row'>";
                echo "<button id='toggle-sidebar-2' class='btn shadow-none p-0' aria-label='Close'>";
                echo "<div class='col-12 '>";

                echo "<div class='row bg-white'>";
                echo "<h5 class='modal-title'>Contact Info</h5>";

                echo "<span class='fs-4' aria-hidden='true'>&times;</span>";

                echo "</button>";
                echo "</div>";
                echo "<div class='row mt-2'>";
                echo "//<!-- <button class='btn btn-primary btn-toggle' >Toggle Sidebar 1</button> -->";
                echo "<div class='card'>";
                echo "</div>";
                echo "<div class='d-flex flex-column align-items-center text-center'>";

                echo "<div class='mt-3'>";
                echo "<div class='col-sm-12'>";
                echo "<p class='text-secondary mb-1'>Full Stack Developer</p>";
                echo "<div class='card-body'>";
                echo "<button class='btn btn-primary'>Follow</button>";
                echo "<img src='https://bootdey.com/img/Content/avatar/avatar6.png' alt='Admin' class='rounded-circle p-1 bg-primary' width='110'>";
                echo "</div>";
                echo "<h4>John Doe</h4>";
                echo "<hr class='my-4'>";
                echo "<p class='text-muted font-size-sm'>Bay Area, San Francisco, CA</p>";
                echo "<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>";
                echo "<button class='btn btn-outline-primary'>Message</button>";
                echo "<span class='text-secondary'>https://bootdey.com</span>";
                echo "</div>";
                echo "<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>";
                echo "<ul class='list-group list-group-flush'>";
                echo "<span class='text-secondary'>bootdey</span>";
                echo "<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-globe me-2 icon-inline'><circle cx='12' cy='12' r='10'></circle><line x1='2' y1='12' x2='22' y2='12'></line><path d='M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z'></path></svg>Website</h6>";
                echo "<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>";
                echo "</li>";
                echo "<span class='text-secondary'>@bootdey</span>";
                echo "<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-github me-2 icon-inline'><path d='M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22'></path></svg>Github</h6>";
                echo "<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>";
                echo "</li>";
                echo "<span class='text-secondary'>bootdey</span>";
                echo "<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-twitter me-2 icon-inline text-info'><path d='M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z'></path></svg>Twitter</h6>";
                echo "<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>";
                echo "</li>";
                echo "<span class='text-secondary'>bootdey</span>";
                echo "<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-instagram me-2 icon-inline text-danger'><rect x='2' y='2' width='20' height='20' rx='5' ry='5'></rect><path d='M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z'></path><line x1='17.5' y1='6.5' x2='17.51' y2='6.5'></line></svg>Instagram</h6>";
                echo "</ul>";
                echo "</li>";
                echo "</div>";
                echo "<h6 class='mb-0'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-facebook me-2 icon-inline text-primary'><path d='M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z'></path></svg>Facebook</h6>";

                echo "</li>";
                echo "<div class='row'>";
                echo "</div>";
                echo "<div class='card'>";
                echo "</div>";
                echo "<div class='row mb-3'>";

                echo "<h6 class='mb-0'>Full Name</h6>";
                echo "<div class='col-sm-12'>";
                echo "<div class='col-sm-9 text-secondary'>";
                echo "<div class='card-body'>";
                echo "</div>";
                echo "<div class='col-sm-3'>";
                echo "<div class='row mb-3'>";
                echo "</div>";
                echo "<h6 class='mb-0'>Email</h6>";
                echo "<input type='text' class='form-control' value='John Doe'>";
                echo "<div class='col-sm-9 text-secondary'>";
                echo "</div>";
                echo "</div>";
                echo "<div class='col-sm-3'>";
                echo "<div class='row mb-3'>";
                echo "</div>";
                echo "<h6 class='mb-0'>Phone</h6>";
                echo "<input type='text' class='form-control' value='john@example.com'>";
                echo "<div class='col-sm-9 text-secondary'>";
                echo "</div>";
                echo "</div>";
                echo "<div class='col-sm-3'>";
                echo "<div class='row mb-3'>";
                echo "</div>";
                echo "<h6 class='mb-0'>Mobile</h6>";
                echo "<input type='text' class='form-control' value='(239) 816-9029'>";
                echo "<div class='col-sm-9 text-secondary'>";
                echo "</div>";
                echo "</div>";
                echo "<div class='col-sm-3'>";
                echo "<div class='row mb-3'>";
                echo "</div>";
                echo "<h6 class='mb-0'>Address</h6>";
                echo "<input type='text' class='form-control' value='(320) 380-4539'>";
                echo "<div class='col-sm-9 text-secondary'>";
                echo "</div>";
                echo "</div>";
                echo "<div class='col-sm-3'>";
                echo "<div class='row'>";
                echo "</div>";
                echo "<div class="col-sm-9 text-secondary">";
                echo "<input type="text" class="form-control" value="Bay Area, San Francisco, CA">";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "<div class="col-sm-3"></div>";

                echo "<input type="button" class="btn btn-primary px-4" value="Save Changes">";

                echo "</div>";
                echo "</div>";

                echo "</div></div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                //echo "<!-- third column only use for toggle end-->";
                echo "</div> ";*/
            } 
            else 
            {
                echo '<p>No records found.</p>';
            }
        } 
        catch(PDOException $e) 
        {
            echo "Error: " . $e->getMessage();
        }
        
        $conn = null;
    }
    ?>            

