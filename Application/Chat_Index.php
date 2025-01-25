<?php


    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $jsonData = $_POST['jsonData'];
    
        $data = json_decode($jsonData, true);
    
        if (json_last_error() === JSON_ERROR_NONE) {


                // session_start();
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

                    $email              =  $data['email'] ;
                    $password            =  $data['password'] ;



                  $stmt = $conn->prepare('SELECT id,email,confirm_password FROM sign_up'); 
                  $stmt->execute();
                  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


                  if ($results) 
                  {
                              foreach ($results as $row) 
                              {
                                  if( ($row['email'] == $email) && ($row['confirm_password'] == $password) )
                                  {
                                        session_start();
                                        
                                        $_SESSION['id'] = $row['id'];
                                        $_SESSION['email'] = $row['email'];

                                        $id = $row['id'];
                                        $email_login = $row['email'];


                                        $date = date('m-d-Y', time());
                                        $time = date('h:i:s', time());


                                        // $t=time();
                                        // echo($t . "<br>");
                                        // $time = date("Y-m-d",$t);

                                        $sql = "UPDATE login_sam SET login_date =NOW() , login_time = CURRENT_TIME()   WHERE id =".$row['id'];

                                        $stmt = $conn->prepare($sql);
                                        $stmt->execute();
                                        // echo $stmt->rowCount();

                                        echo "1";
                                        return;  
                                        break;
                                  }
                                  else if( ($row['email'] == $email) && ($row['confirm_password'] != $password) )
                                  {
                                      echo "2";
                                      return;
                                  }
                                  else if( ($row['email'] != $email) && ($row['confirm_password'] != $password) )
                                  {
                                      echo "3";
                                      return ;
                                  }
                              }
                  } 
                  else 
                  {
                          echo "HI";
                          return ;

                  }
                
                } 
                catch(PDOException $e) 
                {
                    echo $sql1 . "<br>" . $e->getMessage();
                }

                $conn = null;

            } 
            else 
            {
                 echo "Error decoding JSON data.";
            }
    
    
        } 
        else 
        {
            echo "Invalid request";

            
        }
        
?>

