$(document).ready(function()
{
    
        // let name = "object"
        // let search = sessionStorage.getItem(name);
        // search =JSON.parse(search);

        // $('.not-user').hide();

        // if(search == null)
        // {
            // $('.not-user').show();
            // $('.page-section').hide();
            // $('.page-section-about').hide();


            // $(location).attr('href','Designer_World.html');
        // }


        // data get from session storage in web browser...
        //  let emaillogin = search["data"]["email"];
        //  let passwordlogin = search["data"]["password"];
        //  

        //  data get from session in server side
        // let emaillogin = $_SESSION['email'] ;
        // let passwordlogin = $_SESSION['password'];

        // console.log(emaillogin);
        // exit();

        // let process1 = localStorage.getItem("store");
        // let process2 = JSON.parse(process1);

        // for(let i=0; i< process2["table"].length ; i++)
            // {
                // let data1 = process2["table"][i]["email"];
                // let data2 = process2["table"][i]["c_pass"];
            // 
                // if( (data1 == emaillogin) && (data2 == passwordlogin) )
                // {
                    // pass1 = data1;
                    // pass2 = data2;
        // 
                    // let data3 = process2["table"][i]["fname"];
                    // let data4 = process2["table"][i]["lname"];
                    // let data5 = process2["table"][i]["mobile"];
                    // let data6 = process2["table"][i]["dob"];
                    // let data7 = process2["table"][i]["gender"];
                    // let data8 = process2["table"][i]["address"];
                    // let data9 = process2["table"][i]["hobbies"];
        // 
                    // $('.get1').text(data3.toUpperCase());
                    // $('.get2').text(data4.toUpperCase());
                    // $('.get3').text(data1);
                    // $('.get4').text(data5);
                    // $('.get5').text(data6);
                    // $('.get6').text(data7);
                    // $('.get7').text(data8);
                    // $('.get8').text(data9);
                    // $('.get9').text(data2); 
                    // 
                    // let data10 = data3.toUpperCase() +" "+ data4.toUpperCase() ;
        // 
                    // $('.get10').text(data10);     
                // }
            // }

    $('#logout-close-btn').click(function()
    {
        // sessionStorage.clear(); /*  -->in browser storage*/
        // $(location).attr('href','Designer_World.html');
        
        $(location).attr('action','logout.php');   //Home.php
    });


/*
    $('.page-section-about').slideUp();

    $('#about').mouseenter(function()
    {
        $('.page-section-about').slideDown();
    });

    $('#about').mouseleave(function()
    {
        $('.page-section-about').slideUp();
    });*/

});