<?php

    session_start();

    if ( (!isset($_SESSION['id'])) || ($_SESSION['id'] == '') )
    {
      echo "<script>location.href='CHAT_APPLICATION_Index.php'</script>";
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {

        $senderId = $_SESSION['id'];
        $receiverId = $_POST['id'];

        // echo "$senderId"."$receiverId";
        // exit();

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

                    //first method....
                     /*$stmt = $conn->prepare('SELECT sender_message,message_sender_time FROM message_sam WHERE sender_id =".$senderId."AND receiver_id =".$receiverId." ORDER BY message_sender_time '); 
                     $stmt->execute();
                     $r = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                     $results = $stmt->fetchAll(); 


                    foreach ($results as $row)
                    {
                      
                      echo "<div class='message sent h-auto'>";
                      echo "<div class='text'>".$row["sender_message"]."</div>";
                      echo "</div>";
                      echo "<div class='message received h-auto'>";
                      echo "<div class='text'>Hi! I'm good, thanks. How about you?</div>";
                      echo "</div>";
                    }
                    exit();*/



                    // select message_sender_time  from message_sam where sender_id = 42 order by mesagge_sender_time;
                    // select sender_message, message_sender_time  from message_sam where sender_id = 42 order by message_sender_time;

                    /*SECOND-METHOD  */
                    /*$stmt1 = $conn->prepare("SELECT * FROM message_sam WHERE sender_id =$senderId AND receiver_id =$receiverId ORDER BY message_sender_time asc"); 
                    $stmt1->execute();
                    $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);

                    $stmt2 = $conn->prepare("SELECT * FROM message_sam WHERE sender_id =$receiverId AND receiver_id =$senderId ORDER BY message_sender_time asc"); 
                    $stmt2->execute();
                    $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

                    print_r($result1);
                    print_r($result2);

                    exit();
                    $len1 =  count($result1) ;
                    $len2 = count($result2);
                    $len = $len1 + $len2;

                    $overall = 0 ;
                    $i = 0;
                    $j = 0 ;
                    
                    while($overall < $len )
                    {
                      if( $result1[$i]["message_sender_time"] < $result2[$j]["message_sender_time"] )
                      {
                        echo "<div class='message sent h-auto'>";
                        echo "<div class='text'>".$result1[$i]['sender_message']."</div>";
                        echo "</div>";
                        $i++;
                      }
                      else
                      {
                          echo "<div class='message received h-auto'>";
                          echo "<div class='text'>".$result2[$j]['sender_message']."</div>";
                          echo "</div>";  
                          $j++;
                      }
                      $overall++;
                    }*/

/*THIRD METHOD */
$stmt = $conn->prepare("SELECT * FROM message_sam WHERE sender_id in ($senderId,$receiverId) AND receiver_id in ($receiverId,$senderId) ORDER BY message_sender_time asc"); 
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($result as $row)
                    {
                      if($row['sender_id'] == $senderId)
                      {
                        echo "<div class='message sent h-auto'>";
                        echo "<div class='text'>".$row["sender_message"]."</div>";
                        echo "</div>";
                      }
                      else
                      {
                        echo "<div class='message received h-auto'>";
                        echo "<div class='text'>".$row["sender_message"]."</div>";
                        echo "</div>";
                      }
                    }



                    /*for($i=0; $i<$len; $i++)
                    {
                      if( $result1[$i]["message_sender_time"] < $result2[$i]["message_sender_time"] )
                      {
                        echo "<div class='message sent h-auto'>";
                        echo "<div class='text'>".$result1[$i]['sender_message']."</div>";
                        echo "</div>";
                      }
                      else
                      {
                        echo "<div class='message received h-auto'>";
                        echo "<div class='text'>".$result2[$i]['sender_message']."</div>";
                        echo "</div>";  
                      }
                    }*/

                    /*foreach ($results as $row)
                    {
                      
                      echo "<div class='message sent h-auto'>";
                      echo "<div class='text'>".$row["sender_message"]."</div>";
                      echo "</div>";
                      echo "<div class='message received h-auto'>";
                      echo "<div class='text'>".$row["sender_message"]."</div>";
                      echo "</div>";
                    }*/

                    /*foreach ($results as $row)
                    {
                      echo "<div class='message sent h-auto'>";
                      echo "<div class='text'>".strval($row['message'])."</div>";
                      echo "</div>";
                      echo "<div class='message received h-auto'>";
                      echo "<div class='text'>Hi! I'm good, thanks. How about you?</div>";
                      echo "</div>";
  
                    }*/
                
                } 
                catch(PDOException $e) 
                {
                    echo  "<br>" . $e->getMessage();
                }

                $conn = null;
        }
        else
        {
            echo "Invalid request";
        }
        
?>

