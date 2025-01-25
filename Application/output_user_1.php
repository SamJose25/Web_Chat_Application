<?php

  session_start();

    if(isset($_SESSION['id'])){

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

        $stmt = $conn->prepare("SELECT * FROM sign_up");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt->execute();

        $stmt = $conn->prepare('SELECT * FROM sign_up WHERE id !='.$_SESSION['id']); 

        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if ($results) 
        {
            foreach ($results as $row) 
            {
                
                echo "<div class='row sideBar-body user'  data-id='".$row['id']."'>";
                echo "<div class='col-3 col-sm-3 col-xl-3 sideBar-avatar'>";
                echo "<div class='avatar-icon'>";
                    echo "<img class='img-fluid' src='".$row['image_name']."'  alt='user' >";
                  echo"</div>";
                echo"</div>";
                echo "<div class='col-5 col-sm-9 col-xl-9 sideBar-main'>";
                  echo "<div class='row'>";
                    echo "<div class='col-5 col-sm-8 col-xl-8 sideBar-name'>";
                      echo "<span class='name-meta'>".$row['firstname']."</span>";
                    echo "</div>";
                    echo "<div class='col-5 col-sm-4 col-xl-4 pull-right sideBar-time'>";
                      echo "<span class='time-meta pull-right'>18:18</span>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
            
            }
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
