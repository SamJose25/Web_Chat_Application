<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="Header-Footer.css">
    <link rel="stylesheet" href="error.css">
    <link rel="stylesheet" href="Designer.css">

</head>
<body>

<!-- EDIT  MODAL-->
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
                            <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                          EDIT FORM
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
                                                        <form action="" method="" id="formedit" enctype="multipart/form-data" class="container-fluid w-auto d-flex flex-column shadow  rounded pt-3 form-sign-up" autocomplete="on">

                                                            <!-- <div class="container-fluid  form-group "> -->
                                                            <input type="hidden" id="id" name="id" value="">

                                                            <div class="container-fluid  my-2 form-group ">
                                                                    <label for="editfname" class="form-text form-label text-dark fs-5">First Name :</label>
                                                                    <input type="text" id="editfname" name="first_name" class="form-control form-control-sm shadow-none bg-transparent border-dark" placeholder="Enter First Name" >
                                                                    <span class="form-text ms-3 showError"></span>
                                                            
                                                                </div>  
                                                            
                                                                <div class="container-fluid  my-2 form-group ">
                                                                    <label for="editlname" class="form-text form-label text-dark fs-5">Last Name :</label>
                                                                    <input type="text" id="editlname" name="last_name" class="form-control form-control-sm shadow-none bg-transparent border-dark" placeholder="Enter Last Name" >
                                                                    <span class="form-text ms-3 showError"></span>
                                                                </div>  
                                         
                        
                                                            <div class="container-fluid  my-2 form-group ">
                                                                <label for="editemail" class="form-label text-dark fs-5">Email :</label>
                                                                <input type="email" id="editemail" name="email_name" class="form-control form-control-sm shadow-none bg-transparent border-dark" placeholder="Ex : abcgmail.com" >
                                                                <span class="form-text ms-3 showError"></span>
                                                            </div>  
                                                        
                                                            <div class="container-fluid form-group my-2">
                                                            <label for="editmobile" class="form-text form-label text-dark fs-5">Mobile-number :</label>
                                                            <input type="text"  id="editmobile" name="mobile" class="form-control form-control-sm shadow-none bg-transparent border-dark" maxlength="10" placeholder="000-000-0000" 
                                                            onkeypress="return (event.charCode>= 48 && event.charCode<=58)">                            
                                                            <span class="form-text ms-3 showError"></span>
                                                            </div>
                                                        
                                                            <div class="container-fluid form-group my-2">
                                                            <label for="editdob" class="form-text form-label text-dark fs-5">Date Of Birth :</label>
                                                            <input type="date" id="editdob" name="dob" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" >
                                                            <span class="form-text ms-3 showError"></span>
                                                            </div>
                                                        
                                                        
                                                        <div class="container-fluid  my-2 " >
                                                        <div class="row form-group">
                                                            <div class="col-12 ">
                                                                <label for="editmale" class="form-text text-dark fs-5">Gender :</label>
                                                            </div>
                                                        
                                                        <div class="col-12" id="editgender">
                                                        
                                                                <input type="radio" id="editmale" name="gender" class="form-check-input  shadow-none border-dark"  value="male" >
                                                                <label class="form-text me-2" for="editmale">Male </label>
                                                        
                                                                <input type="radio" id="editfemale" name="gender" class="form-check-input shadow-none border-dark"  value="female" >
                                                                <label class="form-text" for="editfemale">Female </label>
                                                                <br>
                                                        
                                                                <span class="form-text ms-3 showError"></span>
                                                        </div>
                                                        </div>
                                                        </div>
                                            
                                                        <div class="container-fluid  my-2">
                                                        <label for="editaddress" class="form-text text-dark fs-5">Address :</label>
                                                            <textarea id="editaddress" name="address" class="form-control form-text form-control-sm shadow-none mt-2 bg-transparent border-dark" rows="3" placeholder="Address"></textarea>
                                                            <span class="form-text ms-3 showError"></span>
                                                        </div>

                                                        
                                            
                                                        <div class="container-fluid my-2">
                                                        <label for="edithobbies" class="form-text text-dark fs-5">Profession :</label>
                                                        <select type="datalist" class="form-select form-select-md shadow-none mt-2 bg-transparent border-dark" id="edithobbies" name="hobby[]" multiple="multiple" size="2">
                                                        
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
                                                            
                                                            <div>
                                                                <label for="editimage" class="form-text text-dark fs-5">Profile*</label>
                                                                <div>
                                                                <img id="received_image" alt="" width="100" height="100" src="" value=""/>
                                                                </div>

                                                                <input type="file" id="editimage" name="image" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" >
                                                                <span class="form-text ms-3 showError"></span>
                                                            </div>
                                                          </div>
                                            
                                            
                                                        <div class="container-fluid  my-2">
                                                            <label for="editcpass" class="form-text text-dark fs-5">Create Password :</label>
                                                            <input type="password" id="editcpass" name="createpassword" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" maxlength="15" placeholder="Create-Password" >
                                                            <span class="form-text ms-3 showError"></span>
                                                        </div>
                                            
                                            
                                                        <div class="container-fluid my-2">
                                                            <label for="editrpass" class="form-text text-dark fs-5">Re-Type Password :</label>
                                                            <input type="password" id="editrpass" name="re_password" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" maxlength="15" placeholder="Type-password" >
                                                            <span class="form-text ms-3 showError"></span>
                                                        </div>
                                            
                                            
                                                        <div class="container-fluid mt-2 ">
                                                            <input type="checkbox" id="editagree" name="agree" class="form-check-input shadow-none" >
                                                            <label for="editagree" class="form-text text-primary border-dark ">I agree</label><br>
                                                            <span class="form-text ms-3 showError"></span>
                                                        
                                                        </div>
                                            
                                                        <div class="container-fluid text-center my-2">
                                                            <input type="submit"  class="btn btn-lg btn-success w-100 shadow-none fs-6 text-white" name="edit" value="Edit">
                                                            <!-- <div  type="submit" class="btn btn-lg btn-success w-100  fs-6" value="SignUp">Sign Up</div> -->
                                                        </div>
                                            
                                            
                                                        <div class="form-group text-center mb-3">
                                                            <div class="text-dark">Already have an account ? <a href="" class="text-primary calllogin">Login</a></div>
                                                        </div>
                                            
                                                            <!-- </div> -->
                                            
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

<!-- New User -->
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
                            <div class="modal fade" id="newuser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                  <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                          New User
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
                                                        <form action="" method="" id="formregister" enctype="multipart/form-data" class="container-fluid w-auto d-flex flex-column shadow  rounded pt-3 form-sign-up" autocomplete="on">

                                                            <!-- <div class="container-fluid  form-group "> -->
                                                            
                                                            <div class="container-fluid  my-2 form-group ">
                                                                    <label for="Regfname" class="form-text form-label text-dark fs-5">First Name :</label>
                                                                    <input type="text" id="Regfname" name="first_name" class="form-control form-control-sm shadow-none bg-transparent border-dark" placeholder="Enter First Name" >
                                                                    <span class="form-text ms-3 showError"></span>
                                                            
                                                               </div>  
                                                            
                                                                <div class="container-fluid  my-2 form-group ">
                                                                    <label for="Reglname" class="form-text form-label text-dark fs-5">Last Name :</label>
                                                                    <input type="text" id="Reglname" name="last_name" class="form-control form-control-sm shadow-none bg-transparent border-dark" placeholder="Enter Last Name" >
                                                                    <span class="form-text ms-3 showError"></span>
                                                                </div>  
                                                            
                                                            <div class="container-fluid  my-2 form-group ">
                                                                <label for="Regemail" class="form-label text-dark fs-5">Email :</label>
                                                                <input type="email" id="Regemail" name="email_name" class="form-control form-control-sm shadow-none bg-transparent border-dark" placeholder="Ex : abcgmail.com" >
                                                                <span class="form-text ms-3 showError"></span>
                                                            </div>  
                                                        
                                                            <div class="container-fluid form-group my-2">
                                                            <label for="Regmobile" class="form-text form-label text-dark fs-5">Mobile-number :</label>
                                                            <input type="text"  id="Regmobile" name="mobile" class="form-control form-control-sm shadow-none bg-transparent border-dark" maxlength="10" placeholder="000-000-0000" 
                                                            onkeypress="return (event.charCode>= 48 && event.charCode<=58)">                            
                                                            <span class="form-text ms-3 showError"></span>
                                                            </div>
                                                        
                                                            <div class="container-fluid form-group my-2">
                                                            <label for="Regdob" class="form-text form-label text-dark fs-5">Date Of Birth :</label>
                                                            <input type="date" id="Regdob" name="dob" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" pattern="\d{4}-\d{2}-\d{2}">
                                                            <span class="form-text ms-3 showError"></span>
                                                            </div>
                                                        
                                                        
                                                        <div class="container-fluid  my-2 " >
                                                        <div class="row form-group">
                                                            <div class="col-12 ">
                                                                <label for="Regmale" class="form-text text-dark fs-5">Gender :</label>
                                                            </div>
                                                        
                                                        <div class="col-12" id="Reggender">
                                                        
                                                                <input type="radio" id="Regmale" name="gender" class="form-check-input  shadow-none border-dark"  value="male" >
                                                                <label class="form-text me-2" for="Regmale">Male </label>
                                                        
                                                                <input type="radio" id="Regfemale" name="gender" class="form-check-input shadow-none border-dark"  value="female" >
                                                                <label class="form-text" for="Regfemale">Female </label>
                                                                <br>
                                                        
                                                                <span class="form-text ms-3 showError"></span>
                                                        </div>
                                                        </div>
                                                        </div>
                                            
                                                        <div class="container-fluid  my-2">
                                                        <label for="Regaddress" class="form-text text-dark fs-5">Address :</label>
                                                            <textarea id="Regaddress" name="address" class="form-control form-text form-control-sm shadow-none mt-2 bg-transparent border-dark" rows="3" placeholder="Address"></textarea>
                                                            <span class="form-text ms-3 showError"></span>
                                                        </div>
                                            
                                                        <div class="container-fluid my-2">
                                                        <label for="Reghobbies" class="form-text text-dark fs-5">Profession :</label>
                                                        <select type="datalist" class="form-select form-select-md shadow-none mt-2 bg-transparent border-dark" id="Reghobbies" name="hobby[]" multiple="multiple" size="2">
                                                        
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
                                                            <label for="Regimage" class="form-text text-dark fs-5">Profile*</label>
                                                            <input type="file" id="Regimage" name="image" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark">
                                                            <span class="form-text ms-3 showError"></span>
                                                          </div>
                                            
                                            
                                                        <div class="container-fluid  my-2">
                                                            <label for="Regcpass" class="form-text text-dark fs-5">Create Password :</label>
                                                            <input type="password" id="Regcpass" name="createpassword" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" maxlength="15" placeholder="Create-Password" >
                                                            <span class="form-text ms-3 showError"></span>
                                                        </div>
                                            
                                            
                                                        <div class="container-fluid my-2">
                                                            <label for="Regrpass" class="form-text text-dark fs-5">Re-Type Password :</label>
                                                            <input type="password" id="Regrpass" name="re_password" class="form-control form-control-sm shadow-none mt-2 bg-transparent border-dark" maxlength="15" placeholder="Type-password" >
                                                            <span class="form-text ms-3 showError"></span>
                                                        </div>
                                            
                                            
                                                        <div class="container-fluid mt-2 ">
                                                            <input type="checkbox" id="Regagree" name="agree" class="form-check-input shadow-none" >
                                                            <label for="Regagree" class="form-text text-primary border-dark ">I agree</label><br>
                                                            <span class="form-text ms-3 showError"></span>
                                                        
                                                        </div>
                                            
                                                        <div class="container-fluid text-center mt-2 mb-4">
                                                            <input type="submit"  class="btn btn-lg btn-success w-100 shadow-none fs-6 text-white" name="newuser" value="Register">
                                                            <!-- <div  type="submit" class="btn btn-lg btn-success w-100  fs-6" value="SignUp">Sign Up</div> -->
                                                        </div>
                                            
                                            
                                                        <!-- <div class="form-group text-center mb-3">
                                                            <div class="text-dark">Already have an account ? <a href="" class="text-primary calllogin">Login</a></div>
                                                        </div> -->
                                            
                                                            <!-- </div> -->
                                            
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


    <div id="output">

    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
          $(document).ready(function()
          {
                    
              $('#output').load('view.php');
                  
          /* new user validation*/
            $('#formregister').on('submit',function(e)
            {
                e.preventDefault();
                alert("new user");

                function validFirstName()
              {
                  let first_name = $('#Regfname[name="first_name"]').val();
                  let call = $('#Regfname[name="first_name"]').siblings('span');

                  const namePattern =/^[a-zA-Z]{3,10}/;
                  const result = namePattern.test(first_name);
                  console.log(result);
              
                  if( first_name === '')
                  {
                      call.addClass('showError');
                      call.text("First name is required");
                      return false;
                  
                  }
                  else
                  {
                      if(!result)
                      {
                          // alert("down");
                          call.addClass('showError');
                          call.text("Enter a valid name");
                          return false;
                      
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      }
                    
                  }
                  return true;
              }
            
              function validLastName()
              {
                  let last_name = $('#Reglname[name="last_name"]').val();
                  let call = $('#Reglname[name="last_name"]').siblings('span');

                  const namePattern =/^[a-zA-Z]{3,10}/;
                  const result = namePattern.test(last_name);
                  console.log(result);
              
                  if( last_name === '')
                  {
                      call.addClass('showError');
                      call.text("*Last name is required");
                      return false;
                  
                  }
                  else
                  {
                      if(!result)
                      {
                          call.addClass('showError');
                          call.text("Enter a valid name");
                          return false;
                      
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      }
                    
                  }
                  return true;
              }
            
              function validEmail()
              {
                  let email_name = $('#Regemail[name="email_name"]').val();
                  let call = $('#Regemail[name="email_name"]').siblings('span');

                  const emailPattern =/^[a-z]{1,1}[a-zA-Z0-9]*@[a-zA-Z0-9]{1,}[.][a-z]{2,}/;
                  const result = emailPattern.test(email_name);
                  console.log(result);
              
                  if( email_name === '')
                  {
                      call.addClass('showError');
                      call.text("*Email is required");
                      return false;
                  
                  }
                  else
                  {
                      if(!result)
                      {
                          call.addClass('showError');
                          call.text("*Invalid email address");
                          return false;
                      
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      
                      }
                    
                  }
                  return true;
              }
            
              function validMobile()
              {
                  let mobile =$('#Regmobile[name="mobile"]').val();
                  let call = $('#Regmobile[name="mobile"]').siblings('span');

                  const mobilePattern = /^[0-9]{10,10}$/;
                  const result = mobilePattern.test(mobile);
                  console.log(result)
              
                  if( mobile === '')
                  {
                      call.addClass('showError');
                      call.text("*Mobile Number is required");
                      return false
                  }
                  else
                  {
                      if(!result)
                      {
                          // alert("down");
                          call.addClass('showError');
                          call.text("*Invalid mobile number");
                          return false
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      }
                    
                  }
                  return true;
              }
            
              function validDate()
              {
                      let dob = $('#Regdob[name="dob"]').val();
                      let call = $('#Regdob[name="dob"]').siblings('span');

                            console.log(dob);
                            // alert("date");

                            if( dob =='')
                            {
                                call.addClass('showError');
                                call.text("*Date of birth is required");
                                return false;
                            }
                            else
                            {
                                if( (dob > "1947-01-01") && (dob < "2024-01-01" ) )
                                {
                                    console.log("true");
                                    call.removeClass('showError');
                                    call.text("");
                                
                                }
                                else
                                {
                                    call.addClass('showError');
                                    call.text("*Invalid Date Of Birth");    
                                    console.log("false");
                                    return false;
                                }
                            }
                            return true;
              }

            
              function validAddress()
              {
                  let address = $('#Regaddress[name="address"]').val();
                  let call = $('#Regaddress[name="address"]').siblings('span');

              
                  if( address === '')
                  {
                      call.addClass('showError');
                      call.text("*Address is required");
                      return false;
                  }
                  else
                  {
                      call.removeClass('showError');
                      call.text("");
                  }
                  return true;
              }
            
              function validHobby()
              {
                  let hobb = $('#Reghobbies[name="hobby[]"]').val();
                  let call = $('#Reghobbies[name="hobby[]"]').siblings('span');
              
              
                  if ((hobb.length === 0) || ((hobb[0] === 'none') && (hobb.length == 1)) )
                   {
                      call.addClass('showError');
                      call.text("*hobbies is required");
                      return false;
                   }
                  else 
                  {
                     call.removeClass('showError');
                     call.text("");
                  }
                  return true;
              }
            
              function validCreatePassword()
              {
                  let password = $('#Regcpass[name="createpassword"]').val();
                  let call = $('#Regcpass[name="createpassword"]').siblings('span');
              
                      const passwordPattern =/[a-zA-Z0-9]{8,15}/;
                      const result = passwordPattern.test(password);
                      console.log(result);
              
                      // console.log(password);
              
              
                      if(password === '')
                      {
                          call.addClass('showError');
                          call.text("Create password is required");
                          return false;
                      }
                      else
                      {
                          if(!result)
                              {
                                  call.addClass('showError');
                                  call.text("*Invalid password");
                                  return false;
                              }
                              else
                              {
                                  call.addClass("showError");
                                  call.text("");
                              }
                            
                      }
                      return true;
              }
            
              function validRePassword()
              {
                  // alert("hihihih");
                  let createpassword = $('#Regcpass[name="createpassword"]').val();
                  let re_password = $('#Regrpass[name="re_password"]').val();
              
                  console.log("j:"+re_password);
                  let call = $('#Regrpass[name="re_password"]').siblings('span');
              
              
              
                  if( re_password === '')
                  {
                      call.addClass('showError');
                      call.text("*Confirm Password is required");
                      return false;
                  }
                  else
                  {
                      if(!(createpassword == re_password))
                      {
                          call.addClass('showError');
                          call.text("*Password is incorrect");
                          return false;
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      }
                  }
                  return true;
              }
            
              function validGender()
              {
                      let male = $('#Regmale:checked').length;
                      let female = $('#Regfemale:checked').length;
                      let call = $('#Regmale').siblings('span');
              
                      if(male == 0 && female == 0)
                      {
                          // alert('uu');
                          call.addClass('showError');
                          call.text("*Gender is required");
                          return false;
                      }
                      else
                      {
                          if(male == 1 || female == 1)
                          {
                              call.removeClass('showError');
                              call.text("");
                          }
                      }
                      return true;
              }
            
              function validAgree()
              {
                  // alert('aa');
                  let agree = $('#Regagree:checked').length;
                  let call = $('#Regagree:checkbox').siblings('span');

                  if( agree == 0)
                  {
                      call.addClass('showError');
                      call.text("*accept the condition");
                      return false;
                  }
                  else
                  {
                      call.removeClass('showError');
                      call.text("");
                  }
                  return true;
              }
            
              function validImage()
              {
                  let field_val =$('#Regimage[name="image"]')[0].files;
                  let call = $('#Regimage[name="image"]').siblings('span');
              

                     if(field_val.length == 0)
                    {
                        call.addClass('showError');
                        call.text("*Please select image");
                        return false;
                    }

                  //new one for image validation...
                  console.log(field_val.length);
                  console.log(field_val[0]['name']);
                  console.log(field_val[0]['size']);
                  console.log(field_val[0]['type']);
              
                  const type_image = ["image/png","image/jpg","image/jpeg"];
                  let process1 = type_image.includes( field_val[0]['type'] );
                  let process2 = field_val[0]['size'];

                 
                  if(!process1) 
                  {
                      call.addClass('showError');
                      call.text("*Please upload image in JPG,JPEG,PNG format");
                      return false;
                  }
                  else if(process2 > 1048576)
                  {
                      call.addClass('showError');
                      call.text("*Max size is 1MB");
                      return false;
                  }
                  else
                  {
                      call.addClass('showError');
                      call.text("");
                  }
                  return true;
              }
            

              // Press Events....
              $('#Regfname[name="first_name"]').on("click",function()
              {
                  $('#Regfname[name="first_name"]').on(" keydown keyup keypress ",function()
                  {
                      validFirstName();
                  });
                
              });
            
              $('#Reglname[name="last_name"]').on("click",function()
              {
                  $('#Reglname[name="last_name"]').on("keydown keyup keypress",function()
                  {
                      validLastName();
                  });
                
              });
            
              $('#Regemail[name="email_name"]').on("click",function()
              {
                  $('#Regemail[name="email_name"]').on("keydown keyup keypress",function()
                  {
                      validEmail();
                  });    
                
              });
            
            
              $('#Regmobile[name="mobile"]').on("click",function()
              {
                  $('#Regmobile[name="mobile"]').on("keydown keyup keypress",function()
                  {
                      validMobile();
                  });
                
              });
            
              $('#Regdob[type="date"]').on("click",function()
              {
                      $('#Regdob[type="date"]').on("keyup keypress keydown",function()
                      {
                          validDate();
                      });
              });
            
              $('#Regaddress[name="address"]').on("click",function()
              {
                  $('#Regaddress[name="address"]').on("keyup keypress keydown",function()
                  {
                      validAddress();
                  });
                
              });
            
            
              $('#Reghobbies[name="hobby[]"]').on("click",function()
              {
                  $('#Reghobbies[name="hobby[]"]').on(" keydown keyup keypress mouseenter mouseleave",function()
                  {
                      validHobby();
                  });
                
              });
            
              $('#Regcpass[name="createpassword"]').on("click",function()
              {
                  $('#Regcpass[name="createpassword"]').on(" keydown keyup keypress",function()
                  {
                      validCreatePassword();
                  });
                
              });
            
              $('#Regrpass[name="re_password"]').on("click",function()
              {
                  $('#Regrpass[name="re_password"]').on(" keydown keyup keypress",function()
                  {
                      validRePassword();
                  });
                
              });
            
              $('#Regagree[name="agree"]').on("click",function()
              {
                      validAgree();
              });
            
              $('#Regmale').on("click ",function()
              {
                  $('#Regmale').on("keyup keypress keydown  mouseenter mouseleave",function()
                  {
                      validGender();
                  });    
              });
            
               $('#Regimage').on("click ",function()
              {
                  $('#Regimage').on("keyup keypress keydown  mouseenter mouseleave",function()
                  {
                      validImage();
                  });    
              });



                    if( !validFirstName() )
                    {
                        return false;
                    }
                
                    if( !validLastName() )
                    {
                        return false;
                    }
                
                    if( !validEmail() )
                    {
                        return false;
                    }
                
                    if( !validMobile() )
                    {
                        return false;
                    }
                
                    if( !validDate())
                    {
                        return false;
                    }
                
                    if( !validGender())
                
                    {
                        return false;
                    }
                
                    if( !validAddress())
                    {
                        return false;
                    }
                
                    if( !validHobby())
                    {
                        return false;
                    }
                
                    if( !validImage())
                    {
                        return false;
                    }
                
                    if( !validCreatePassword())
                    {
                        return false;
                    }
                
                    if( !validRePassword())
                    {
                        return false;
                    }
                
                    if( !validAgree())
                    {
                        return false;
                    }
                        let formData = new FormData(this);
                        console.log(formData);
                
                        $.ajax
                        ({
                            url: "serialize.php",
                            type: "POST",
                            // data: $('#formsignup').serialize(),
                            data:formData,
                            contentType:false,
                            processData:false,
                            success: function(response) 
                            {
                                alert(response);
                                $('#output').load('view.php');

                                /*$("<tr></tr>").html(response).appendTo(".table");*/
                                $("#formregister").trigger("reset");
                            }
                        });
                    
                    $('#newuser').modal('hide');
                });


           
           

            // delete 
            $(document).on("click",".delete",function(e)
            {
                alert("Delete");
                event.preventDefault();
                let remove = $(this);
                let id = $(this).attr("data-id");

                $.ajax
                ({
                    url: "delete.php",
                    type: "POST",
                    data:{id:id},
                    success: function(response) 
                    {
                        // alert(response);
                        remove.closest("tr").hide();
                    }
                });                

            }); 

            //edit
            $(document).on("click",".edit",function(e)
            {
                // alert("Edit");
                event.preventDefault();
                let remove = $(this);
                let id = $(this).attr("data-id");
                $('#id').val(id);

                $.ajax
                ({
                    url: "edit.php",
                    type: "POST",
                    data:{id:id},
                    success: function(response) 
                    {
                        alert(response);
                        let data = JSON.parse(response);
                        console.log(data);
                        console.log(data.image_name);
                        console.log(data.gender);

                        
                        
                        // $('#edithobbies option[value="Teacher"]').prop('selected',true);

                        
                        $('#editfname[name="first_name"]').val(data['firstname']);
                        $('#editlname[name="last_name"]').val(data['lastname']);
                        $('#editemail[name="email_name"]').val(data['email']);
                        $('#editmobile[name="mobile"]').val(data['mobile']);
                        $('#editaddress[name="address"]').val(data['address_']);
                        $('#editdob[name="dob"]').val( data['date_of_birth']);
                        
                        // $('#editimage[name="image"]').val(data['image_name']);

                        $('#editcpass[name="createpassword"]').val(data['create_password']);
                        $('#editrpass[name="re_password"]').val(data['confirm_password']);

                        //hobby selected value
                        let hobby = data.hobby;
                        console.log(hobby);
                        hobby = hobby.split(",");
                        for(let i=0;i<hobby.length;i++)
                        {
                            $('#edithobbies option[value='+hobby[i]).prop('selected',true);
                        }
                        
                        //gender checked 
                        $('#editagree[name="agree"]').prop("checked",true);

                        if(data.gender == "male")
                        {
                            $('#editmale[name="gender"]').prop("checked",true);
                        }
                        else
                        {
                            $('#editfemale[name="gender"]').prop("checked",true);
                        }


                        //image 
                        $('#received_image').attr("src","http://t9.rifluxyss.com/sam/"+data.image_name);
                        $('#received_image').val(data.image_name);

                        
                        $('#edit').modal('show');
                        // remove.closest("tr").hide();
                    }
                });                

            });

            
            function validFirstName()
            {
                  let first_name = $('#editfname[name="first_name"]').val();
                  let call = $('#editfname[name="first_name"]').siblings('span');

                  const namePattern =/^[a-zA-Z]{3,10}/;
                  const result = namePattern.test(first_name);
                  console.log(result);
              
                  if( first_name === '')
                  {
                      call.addClass('showError');
                      call.text("First name is required");
                      return false;
                  
                  }
                  else
                  {
                      if(!result)
                      {
                          // alert("down");
                          call.addClass('showError');
                          call.text("Enter a valid name");
                          return false;
                      
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      }
                    
                  }
                  return true;
              }
            
              function validLastName()
              {
                  let last_name = $('#editlname[name="last_name"]').val();
                  let call = $('#editlname[name="last_name"]').siblings('span');

                  const namePattern =/^[a-zA-Z]{3,10}/;
                  const result = namePattern.test(last_name);
                  console.log(result);
              
                  if( last_name === '')
                  {
                      call.addClass('showError');
                      call.text("*Last name is required");
                      return false;
                  
                  }
                  else
                  {
                      if(!result)
                      {
                          call.addClass('showError');
                          call.text("Enter a valid name");
                          return false;
                      
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      }
                    
                  }
                  return true;
              }
            
              function validEmail()
              {
                  let email_name = $('#editemail[name="email_name"]').val();
                  let call = $('#editemail[name="email_name"]').siblings('span');

                  const emailPattern =/^[a-z]{1,1}[a-zA-Z0-9]*@[a-zA-Z0-9]{1,}[.][a-z]{2,}/;
                  const result = emailPattern.test(email_name);
                  console.log(result);
              
                  if( email_name === '')
                  {
                      call.addClass('showError');
                      call.text("*Email is required");
                      return false;
                  
                  }
                  else
                  {
                      if(!result)
                      {
                          call.addClass('showError');
                          call.text("*Invalid email address");
                          return false;
                      
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      
                      }
                    
                  }
                  return true;
              }
            
              function validMobile()
              {
                  let mobile =$('#editmobile[name="mobile"]').val();
                  let call = $('#editmobile[name="mobile"]').siblings('span');

                  const mobilePattern = /^[0-9]{10,10}$/;
                  const result = mobilePattern.test(mobile);
                  console.log(result)
              
                  if( mobile === '')
                  {
                      call.addClass('showError');
                      call.text("*Mobile Number is required");
                      return false
                  }
                  else
                  {
                      if(!result)
                      {
                          // alert("down");
                          call.addClass('showError');
                          call.text("*Invalid mobile number");
                          return false
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      }
                    
                  }
                  return true;
              }
            
      
              function validDate()
            {
                let dob = $('#editdob[name="dob"]').val();
                let call = $('#editdob[name="dob"]').siblings('span');
                console.log(dob);
                // alert("date");
                
                if( dob =='')
                {
                    call.addClass('showError');
                    call.text("*Date of birth is required");
                    return false;
                }
                else
                {
                    if( (dob > "1947-01-01") && (dob < "2024-01-01" ) )
                    {
                        console.log("true");
                        call.removeClass('showError');
                        call.text("");
                    
                    }
                    else
                    {
                        call.addClass('showError');
                        call.text("*Invalid Date Of Birth");    
                        console.log("false");
                        return false;
                    }
                }
                return true;
            }
            
              function validAddress()
              {
                  let address = $('#editaddress[name="address"]').val();
                  let call = $('#editaddress[name="address"]').siblings('span');

              
                  if( address === '')
                  {
                      call.addClass('showError');
                      call.text("*Address is required");
                      return false;
                  }
                  else
                  {
                      call.removeClass('showError');
                      call.text("");
                  }
                  return true;
              }
            
              function validHobby()
              {
                  let hobb = $('#edithobbies[name="hobby[]"]').val();
                  let call = $('#edithobbies[name="hobby[]"]').siblings('span');
              
              
                  if ((hobb.length === 0) || ((hobb[0] === 'none') && (hobb.length == 1)) )
                   {
                      call.addClass('showError');
                      call.text("*hobbies is required");
                      return false;
                   }
                  else 
                  {
                     call.removeClass('showError');
                     call.text("");
                  }
                  return true;
              }
            
              function validCreatePassword()
              {
                  let password = $('#editcpass[name="createpassword"]').val();
                  let call = $('#editcpass[name="createpassword"]').siblings('span');
              
                      const passwordPattern =/[a-zA-Z0-9]{8,15}/;
                      const result = passwordPattern.test(password);
                      console.log(result);
              
                      // console.log(password);
              
              
                      if(password === '')
                      {
                          call.addClass('showError');
                          call.text("Create password is required");
                          return false;
                      }
                      else
                      {
                          if(!result)
                              {
                                  call.addClass('showError');
                                  call.text("*Invalid password");
                                  return false;
                              }
                              else
                              {
                                  call.addClass("showError");
                                  call.text("");
                              }
                            
                      }
                      return true;
              }
            
              function validRePassword()
              {
                  let createpassword = $('#editcpass[name="createpassword"]').val();
                  let re_password = $('#editrpass[name="re_password"]').val();
              
                  console.log("j:"+re_password);
                  let call = $('#editrpass[name="re_password"]').siblings('span');
              
              
              
                  if( re_password === '')
                  {
                      call.addClass('showError');
                      call.text("*Confirm Password is required");
                      return false;
                  }
                  else
                  {
                      if(!(createpassword == re_password))
                      {
                          call.addClass('showError');
                          call.text("*Password is incorrect");
                          return false;
                      }    
                      else 
                      {
                          call.removeClass('showError');
                          call.text("");
                      }
                  }
                  return true;
              }
            
              function validGender()
              {
                      let male = $('#editmale:checked').length;
                      let female = $('#editfemale:checked').length;
                      let call = $('#editmale').siblings('span');
              
                      if(male == 0 && female == 0)
                      {
                          // alert('uu');
                          call.addClass('showError');
                          call.text("*Gender is required");
                          return false;
                      }
                      else
                      {
                          if(male == 1 || female == 1)
                          {
                              call.removeClass('showError');
                              call.text("");
                          }
                      }
                      return true;
              }
            
              function validAgree()
              {
                  // alert('aa');
                  let agree = $('#editagree:checked').length;
                  let call = $('#editagree:checkbox').siblings('span');

                  if( agree == 0)
                  {
                      call.addClass('showError');
                      call.text("*accept the condition");
                      return false;
                  }
                  else
                  {
                      call.removeClass('showError');
                      call.text("");
                  }
                  return true;
              }
            
              function validImage()
              {
                    // $('#received_image').attr("src","../"+data.image_name);
                    let old_image = $('#received_image').val();

                
                  let field_val =$('#editimage[name="image"]')[0].files;
                  let call = $('#editimage[name="image"]').siblings('span');

                  if(field_val.length === 0)
                  {
                            call.text("");
                            $('#received_image').attr("src","http://t9.rifluxyss.com/sam/"+old_image);
                            return false;
                  }
              
                  //new one for image validation...
              
                  console.log(field_val.length);
                  console.log(field_val[0]['name']);
                  console.log(field_val[0]['size']);
                  console.log(field_val[0]['type']);
              
                  const type_image = ["image/png","image/jpg","image/jpeg"];
                  let process1 = type_image.includes( field_val[0]['type'] );
                  let process2 = field_val[0]['size'];

              
                  if(!process1) 
                  {
                      call.addClass('showError');
                      call.text("*Please upload image in JPG,JPEG,PNG format");
                      return false;
                  }
                  else if(process2 > 1048576)
                  {
                      call.addClass('showError');
                      call.text("*Max size is 1MB");
                      return false;
                  }
                  else
                  {
                        $('#received_image').attr("src","http://t9.rifluxyss.com/sam/"+field_val[0]['name']);
                        let old_image = $('#received_image').val(field_val[0]['name']);

                      call.addClass('showError');
                      call.text("");
                  }
                  return true;
              }
            

              $('#editfname[name="first_name"]').on("click",function()
              {
                  $('#editfname[name="first_name"]').on(" keydown keyup keypress ",function()
                  {
                      validFirstName();
                  });
                
              });
            
              $('#editlname[name="last_name"]').on("click",function()
              {
                  $('#editlname[name="last_name"]').on("keydown keyup keypress",function()
                  {
                      validLastName();
                  });
                
              });
            
              $('#editemail[name="email_name"]').on("click",function()
              {
                  $('#editemail[name="email_name"]').on("keydown keyup keypress",function()
                  {
                      validEmail();
                  });    
                
              });
            
            
              $('#editmobile[name="mobile"]').on("click",function()
              {
                  $('#editmobile[name="mobile"]').on("keydown keyup keypress",function()
                  {
                      validMobile();
                  });
                
              });
            
              $('#editdob[type="date"]').on("click",function()
              {
                      $('#editdob[type="date"]').on("keyup keypress keydown",function()
                      {
                          validDate();
                      });
              });
            
              $('#editaddress[name="address"]').on("click",function()
              {
                  $('#editaddress[name="address"]').on("keyup keypress keydown",function()
                  {
                      validAddress();
                  });
                
              });
            
            
              $('#edithobbies[name="hobby[]"]').on("click",function()
              {
                  $('#edithobbies[name="hobby[]"]').on(" keydown keyup keypress mouseenter mouseleave",function()
                  {
                      validHobby();
                  });
                
              });
            
              $('#editcpass[name="createpassword"]').on("click",function()
              {
                  $('#editcpass[name="createpassword"]').on(" keydown keyup keypress",function()
                  {
                      validCreatePassword();
                  });
                
              });
            
              $('#editrpass[name="re_password"]').on("click",function()
              {
                  $('#editrpass[name="re_password"]').on(" keydown keyup keypress",function()
                  {
                      validRePassword();
                  });
                
              });
            
              $('#editagree[name="agree"]').on("click",function()
              {
                      validAgree();
              });
            
              $('#editgender').on("click ",function()
              {
                  $('#editgender').on("keyup keypress keydown  mouseenter mouseleave",function()
                  {
                      validGender();
                  });    
              });
            
               $('#editimage').on("click ",function()
              {
                  $('#editimage').on("keyup keypress keydown  mouseenter mouseleave",function()
                  {
                      validImage();
                  });    
                });





            $('#formedit').on('submit',function(e)
            {
                e.preventDefault();
                // alert("edit user");


                    if( !validFirstName() )
                    {
                        return false;
                    }
                
                    if( !validLastName() )
                    {
                        return false;
                    }
                
                    if( !validEmail() )
                    {
                        return false;
                    }
                
                    if( !validMobile() )
                    {
                        return false;
                    }
                
                    if( !validDate())
                    {
                        return false;
                    }
                
                    if( !validGender())
                
                    {
                        return false;
                    }
                
                    if( !validAddress())
                    {
                        return false;
                    }
                
                    if( !validHobby())
                    {
                        return false;
                    }

                    if( !validImage()  )
                    {
                        // return false;
                    }
                
                    if( !validCreatePassword())
                    {
                        return false;
                    }
                
                    if( !validRePassword())
                    {
                        return false;
                    }
                
                    if( !validAgree())
                    {
                        return false;
                    }

                    

                    let formData = new FormData(this);
                    console.log(formData);

                    
                    // $(document).on("click",".delete",function(e)
                    // {
                        alert("Modify");
                        // event.preventDefault();
                        // let id = $(this).attr("data-id");
                        $('#id').val(id);


                    $.ajax
                    ({
                        url: "modify.php",
                        type: "POST",
                        // data: $('#formedit').serialize(),
                        data:formData,
                        contentType:false,
                        processData:false,
                        success: function(response) {
                        // alert(response);
                        $('#output').load('view.php');

                        }
                    });
          
                    $("#formedit").trigger("reset");

                    $('#edit').modal('hide');
            });


        
            });
    </script>
</body>
</html> 