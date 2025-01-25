<?php

    session_start();

    if ( ($_SESSION['id'] == '') || (!isset($_SESSION['id']))  )
    {
      echo "<script>location.href='CHAT_APPLICATION_Index.php'</script>";
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {

        $senderId = $_SESSION['id'];
        $receiverId = $_POST['id'];
        $message = $_POST['text'];

         //echo "$senderId"."$receiverId"."$message";
         //exit();

                // database connection...
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
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "INSERT INTO  message_sam (sender_id,receiver_id,sender_message,message_sender_time) VALUES ('$senderId','$receiverId','$message',NOW() )";
                    $conn->exec($sql);

                     echo "ok message added";
                
                } 
                catch(PDOException $e) 
                {
                    echo $sql . "<br>" . $e->getMessage();
                }

                $conn = null;
        }
        else
        {
            echo "Invalid request";
        }
        
?>

