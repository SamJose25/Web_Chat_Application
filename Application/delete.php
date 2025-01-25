<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" ) 
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
        
          $sql = "DELETE FROM sign_up WHERE id=".$_POST["id"];
        
          $conn->exec($sql);
          echo "Record deleted successfully";
        } 
        catch(PDOException $e) 
        {
          echo $sql . "<br>" . $e->getMessage();
        }
    }
?>