<?php

                // $servername = "localhost";
                // $username = "training";
                // $password = "training";
                // $dbname = "training";
                include('database.php');


    try 
    {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "SELECT * FROM sign_up WHERE id=".$_POST['id'];

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result =  $stmt->fetch(PDO::FETCH_ASSOC);

        echo json_encode($result);
      
    } 
    catch(PDOException $e) 
    {
      echo json_encode(['error' . $e->getMessage()]);
    }

  $conn = null;
?>