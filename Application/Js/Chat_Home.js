$(document).ready(function(){
    
    $('.conversation').hide();

    $('.output_user_1').load("output_user_1.php");

    $(document).on("click",".user",function()
    {
        $('.conversation').show();
    });

    function loadMsg(id)
    {
        $.ajax
        ({
            url: "sendArea.php",
            type: "POST",
            data:{id:id},
            success: function(response) 
            {
                //alert(response);
                // $('#chat-body-content').load('sendArea.php')

                $('#chat-body-content').html(response);
            }
        });
    }


    let msg_id = '';

    $(document).on("click",".user",function(e)
    {
        // alert("call");
        e.preventDefault();
        $('[name="type_message"]').val("") ;
        let id = $(this).attr("data-id");

        msg_id = id;

        $.ajax
        ({
            url: "output_user_2.php",
            type: "POST",
            data:{id:id},
            success: function(response) 
            {
                // alert(response);
                $('.output_user_2').html(response);
                loadMsg(id);

            }
        });  
    }); 

    $('.heading-avatar').on("click",function(e)
    {
        alert("sam");
        $.ajax
        ({
            url: "output_user_3.php",
            type: "POST",
            data:{id:msg_id},
            success: function(response) 
            {
                // alert(response);
                $('.output_user_3').html(response);
                // loadMsg(id);

            }
        });  

    });
    

        $('#msg-send').on("click",function()
        {
            //$('[name="type_message"]').val("") ;

            let text = $('[name="type_message"]').val();

            if(text == "")
            {
                console.log("error empty");
            }
            else
            {
                alert( $('[name="type_message"]').val());

                        $.ajax
                        ({
                            url: "sendingmessage.php",
                            type: "POST",
                            data:{id:msg_id,text:text},
                            success: function(response) 
                            {
                                //alert(response);
                                    // $('#chat-body-content').load('sendArea.php')
                                    // $('#chat-body-content').html(response);
                                  $('[name="type_message"]').val('');
                                    loadMsg(msg_id);
                                  
                            }
                        });  
                
            }
        });




    /*$(".user ").on("click", function(e){
        var dataId = $(this).last().attr("data-id");
        alert("The data-id of clicked item is: " + dataId);
        console.log(dataId);

        let storedData = JSON.stringify({"dataTd":dataId});
        alert(console.log(storedData));
                        
    });*/

});


/*$(document).ready(function()
{
    $('.output_user_1').load("output_user_1.php");
    

    
    $('.output_user_2').load("output_user_2.php");


    
    // $('.conversation').hide();

    $('.heading').on("click",function()
    {
        $('.conversation').toggle();

    });


    // logout
    $('#logout-close-btn').click(function()
    {
        $(location).attr('action','logout.php');  
    });

    


});
*/