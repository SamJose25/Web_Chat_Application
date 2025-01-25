$(document).ready(function()
{

    function validFirstName()
    {
        let first_name = $('[name="first_name"]').val();
        let call = $('[name="first_name"]').siblings('span');
        
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
        let last_name = $('[name="last_name"]').val();
        let call = $('[name="last_name"]').siblings('span');
        
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
        let email_name = $('[name="email_name"]').val();
        let call = $('[name="email_name"]').siblings('span');
        
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
        let mobile =$('[name="mobile"]').val();
        let call = $('[name="mobile"]').siblings('span');
        
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

            let dob = $('[name="dob"]').val();
            let call = $('[name="dob"]').siblings('span');
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
                if( (dob > "1947-01-01") && (dob < "2020-01-01" ) )
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
        let address = $('[name="address"]').val();
        let call = $('[name="address"]').siblings('span');
        

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
        let hobb = $('[name="hobby[]"]').val();
        let call = $('[name="hobby[]"]').siblings('span');


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
        let password = $('[name="createpassword"]').val();
        let call = $('[name="createpassword"]').siblings('span');

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
        let createpassword = $('[name="createpassword"]').val();
        let re_password = $('[name="re_password"]').val();

        console.log("j:"+re_password);
        let call = $('[name="re_password"]').siblings('span');

    

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
            let male = $('#male:checked').length;
            let female = $('#female:checked').length;
            let call = $('#male').siblings('span');

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
        let agree = $('#agree:checked').length;
        let call = $(':checkbox').siblings('span');
        
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
        let field_val =$('[name="image"]')[0].files;
        let call = $('[name="image"]').siblings('span');
        
        //old one..
       /* var str_split = field_val.split('.');
        var get_extension = str_split.pop();

        var extension_arr = ['jpg','jpeg','png'];
        
        var search = extension_arr.includes(get_extension);
        console.log('search'+search);
        // return false;

        if(field_val == '')
        {
            // var field_val =$('[name="image"]');
            call.addClass('showError');
            call.text("*Image is required");
            return false;
        }
        else if(!search)
        {
            // var field_val =$('[name="image"]');
            call.addClass('showError');
            call.text("*Please upload image in JPG,JPEG,PNG format");
            return false;
        }
        else
        {
            call.addClass('showError');
            call.text("");
        }
        return true;*/

        //new one for image validation...

        console.log(field_val.length);
        console.log(field_val[0]['name']);
        console.log(field_val[0]['size']);
        console.log(field_val[0]['type']);

        const type_image = ["image/png","image/jpg","image/jpeg"];
        let process1 = type_image.includes( field_val[0]['type'] );
        let process2 = field_val[0]['size'];
        

        if(field_val.length === 0)
        {
            call.addClass('showError');
            call.text("*Please select image");
            return false;
        }
        else if(!process1) 
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
    $('[name="first_name"]').on("click",function()
    {
        $('[name="first_name"]').on(" keydown keyup keypress ",function()
        {
            validFirstName();
        });
    
    });

    $('[name="last_name"]').on("click",function()
    {
        $('[name="last_name"]').on("keydown keyup keypress",function()
        {
            validLastName();
        });
    
    });

    $('[name="email_name"]').on("click",function()
    {
        $('[name="email_name"]').on("keydown keyup keypress",function()
        {
            validEmail();
        });    

    });


    $('[name="mobile"]').on("click",function()
    {
        $('[name="mobile"]').on("keydown keyup keypress",function()
        {
            validMobile();
        });
    
    });

    $('#dob').on("click",function()
    {
            $('#dob').on("keyup keypress keydown",function()
            {
                validDate();
            });
    });

    $('[name="address"]').on("click",function()
    {
        $('[name="address"]').on("keyup keypress keydown",function()
        {
            validAddress();
        });
    
    });


    $('[name="hobby[]"]').on("click",function()
    {
        $('[name="hobby[]"]').on(" keydown keyup keypress mouseenter mouseleave",function()
        {
            validHobby();
        });
    
    });

    $('[name="createpassword"]').on("click",function()
    {
        $('[name="createpassword"]').on(" keydown keyup keypress",function()
        {
            validCreatePassword();
        });
    
    });

    $('[name="re_password"]').on("click",function()
    {
        $('[name="re_password"]').on(" keydown keyup keypress",function()
        {
            validRePassword();
        });
    
    });

    $('[name="agree"]').on("click",function()
    {
            validAgree();
    });

    $('.gender').on("click ",function()
    {
        $('.gender').on("keyup keypress keydown  mouseenter mouseleave",function()
        {
            validGender();
        });    
    });

     $('#image').on("click ",function()
    {
        $('#image').on("keyup keypress keydown  mouseenter mouseleave",function()
        {
            validImage();
        });    
    });


    // sign up validation
    // $("form").submit(function(event)
    $('#formsignup').on('submit',function(e)
    {
        e.preventDefault();

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
                //url: "serialize.php",
                url: "ajax_web_chat_application.php",
                type: "POST",
                // data: $('#formsignup').serialize(),
                data: formData,
                contentType:false,
                processData:false,
                success: function(response) {
                  //alert(response);
                  $("#formsignup").trigger("reset");
                  $('#sign_up').modal('hide');
                  $('#login').modal('show');
                }
            });

    });



         //calling modal
         $('.callsignup').click(function(event)
         {
             event.preventDefault();
             $('#login').modal('hide');
             $('#sign_up').modal('show');
         });
     
         $('.calllogin').click(function(event)
         {
             event.preventDefault();
             $('#sign_up').modal('hide');
             $('#login').modal('show');
         });
     
     
         // Login validation
     
         function loginPassword()
         {
             let password = $('[name="passwordlogin"]').val();
             let call = $('[name="passwordlogin"]').siblings('span');
     
             const passwordPattern =/[a-zA-Z0-9]{8,15}/;
             const result = passwordPattern.test(password);
             // console.log(result);
     
             console.log(password);
     
     
             if(password === '')
             {
                 call.addClass('showError');
                 call.text("Enter a password");
                 return false;
             }
             else
             {
                 if(!result)
                     {
                         call.addClass('showError');
                         call.text("*Password contain minimum 8 letters");
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
     
         function loginEmail()
         {
             let emaillogin = $('[name="emaillogin"]').val();
             let call = $('[name="emaillogin"]').siblings('span');
             
             const emailPattern =/^[a-z]{1,1}[a-zA-Z0-9]*@[a-zA-Z0-9]{1,}[.][a-z]{2,}/;
             const result = emailPattern.test(emaillogin);
             console.log(result);
     
             if( emaillogin === '')
             {
                 call.addClass('showError');
                 call.text("*Enter email address");
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
                     // alert("down ok");
                     call.removeClass('showError');
                     call.text("");
                 }
             }
             return true;
         }
     
         function loginRemember()
         {
             let remember = $('#condition:checked').length;
             let call = $('#condition:checkbox').siblings('span');
             
             if( remember == 0)
             {
                 call.addClass('showError');
                 call.text("*Can I remember your passowrd");
                 return false;
             }
             else
             {
                 call.removeClass('showError');
                 call.text("");
             }
             return true;
         }
     
     
         $('[name="emaillogin"]').on("click",function()
         {
             $('[name="emaillogin"]').on("keydown keyup keypress",function()
             {
                 loginEmail();
             });
         
         });
     
         $('[name="passwordlogin"]').on("click",function()
         {
             $('[name="emaillogin"]').on("keydown keyup keypress",function()
             {
                 loginEmail();
             });
         
         });
     
         $('[name="condition"]').on("click",function()
         {
             loginRemember();
         });
     
     
        //  $('[value="Login"]').on('click',function()
        // $('#formlogin').on('submit',function(event)
            $('#formlogin').on('submit',function(e)
            {    
                // alert("login")
                e.preventDefault();

         
                 if(!loginEmail()) 
                 {
                     return false;
                 }
                 else if(!loginPassword())
                 {
                     return false;
                 }
                        // alert("sam");
                        
                        let email =  $('#emaillogin').val();
                        let password = $('#passwordlogin').val();

                        let storedData = JSON.stringify({"email":email,"password":password});
                        console.log(storedData);

                        
                        $.ajax({
                            type: "post",
                            //url: "Chat_Index.php",
                            url: "ajax_web_chat_application.php",
                            data: { action: "login",
                                    email : email,
                                    password : password
                             }, // Send JSON data as a string
                            success: function(data) {
                                //alert(data);
                              var response = JSON.parse(data);
                              //alert(response);
                                    if(response.status == "Success"){
                                        //alert('r');
                                        location.href="Chat_Home.php";
                                    }else {
                                        let call = $('[name="passwordlogin"]').siblings('span');
                                        call.addClass('showError');
                                        call.text(response['msg']);
                                        $("#formsignup").trigger("reset");
                                        $('#login').modal('hide');
                                        $('#sign_up').modal('show');
                                    }
                            }
                        });

         });
     
             // contact validation
             $('#submitButtonC').click(function(event)
             {
                 event.preventDefault();
         
                 let t1 = $('#nameC').val() == '';
                 let t2 = $('#emailC').val() == '';
                 let t3 = $('#messageC').val() == '';
                 let t4 = $('#messageC').val() == '';
         
         
         
                 if(t1 || t2 || t3 || t4)
                 {
                     $('#eror').addClass('.showError');
                     $('#eror').text("Please fill all the fields...");
                    
                    
                     return;
                 }
         
                 //name
                 let find1 = $('#nameC').val();
                 const nameP =/^[a-zA-Z]{3,10}/;
                 const result1 = nameP.test(find1);
                 
                 if(!result1)
                 {
                     $('#eror').addClass('.showError');
                     $('#eror').text("Enter a valid name");
                     return;
                 }
                 else
                 {
                     $('#eror').removeClass('.showError');
                     $('#eror').text("");
                 }
         
                 //email
                 let find2 = $('#emailC').val();
                 const emailP =/^[a-z]{1,1}[a-zA-Z0-9]*@[a-zA-Z0-9]{1,}[.][a-z]{2,}/;
                 const result2 = emailP.test(find2);
                 
                 if(!result2)
                 {
                     $('#eror').addClass('.showError');
                     $('#eror').text("Enter a valid email address");
                     return;
                 }
                 else
                 {
                     $('#eror').removeClass('.showError');
                     $('#eror').text("");
                 }
         
         
                 //phone
                 let find3 = $('#phoneC').val();        
                 const phoneP = /^[0-9]{10,10}$/;
                 const result3 = phoneP.test(find3);
                 
                 if(!result3)
                 {
                     $('#eror').addClass('.showError');
                     $('#eror').text("Enter a valid mobile number");
                     return;
                 }
                 else
                 {
                     $('#eror').removeClass('.showError');
                     $('#eror').text("");
                 }
         
                 //message
                 let find4 = $('#messageC').val();        
                 
                 if(find4 === '')
                 {
                     $('#eror').addClass('.showError');
                     $('#eror').text("Enter a message");
                     return;
                 }
                 else
                 {
                     $('#eror').removeClass('.showError');
                     $('#eror').text("");
                 }
         
                 alert("We wiil contact you");
                 
                 $("#contactForm").trigger("reset");
         
             });
     
             // animate
             $('#home').click(function(event)
             {   
                 event.preventDefault();
                 $('html,body').animate({scrollTop:$('#body').offset().top},1000);
             });
     
             $('#about').click(function(event)
             {   
                 event.preventDefault();
                 $('html,body').animate({scrollTop:$('.page-section-about').offset().top-50},100);
             });
          
             $('#portfolio').click(function(event)
             {   
                 event.preventDefault();
                 $('html,body').animate({scrollTop:$('#portfolio-block').offset().top-50},100);
             });
     
             $('#contact').click(function(event)
             {   
                 event.preventDefault();
                 $('html,body').animate({scrollTop:$('.contact-section').offset().top-60},100);
             });
        
             
             // $('main').hide();
             // $('section').hide();
});

