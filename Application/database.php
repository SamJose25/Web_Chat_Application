<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Web_Chat_Application";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //               $stmt = $conn->prepare('SELECT Id FROM Test'); 
    //               $stmt->execute();
    //               $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //               foreach ($results as $row) {
    //                 echo "ID: " . $row['Id'] . "<br>";
    //             }

?>
