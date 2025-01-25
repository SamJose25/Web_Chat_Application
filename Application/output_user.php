<?php


    // $servername = "localhost";
    // $username = "training";
    // $password = "training";
    // $dbname = "training";
    include('database.php');


    try 
    {

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $stmt = $conn->prepare("SELECT * FROM sign_up");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt->execute();

        $stmt = $conn->prepare('SELECT * FROM sign_up'); // Replace 'users' with your table name

        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        if ($results) 
        {
            foreach ($results as $row) 
            {
                
                echo "<div class='row sideBar-body'>";
                echo "<div class='col-sm-3 col-xs-3 sideBar-avatar'>";
                  echo "<div class='avatar-icon'>";
                    // echo "<img src='https://bootdey.com/img/Content/avatar/avatar1.png'>";
                    echo  "<img class='img-fluid' src='http://t9.rifluxyss.com/sam/".$row['image_name']."'  alt='user' >";
                  echo "</div>";
                echo "</div>";
                echo "<div class='col-sm-9 col-xs-9 sideBar-main'>";
                  echo "<div class='row'>";
                    echo "<div class='col-sm-8 col-xs-8 sideBar-name'>";
                      echo "<span class='name-meta'>".$row['firstname']."</span>";
                    echo "</div>";
                    echo "<div class='col-sm-4 col-xs-4 pull-right sideBar-time'>";
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
?>            
