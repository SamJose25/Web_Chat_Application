<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) 
    {
        print_r($_POST);
        echo $_FILES['image']['tmp_name'];


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

                    $firstname           =  $_POST['first_name'] ;
                    $lastname            =  $_POST['last_name'] ;
                    $email               =  $_POST['email_name'] ;
                    $mobile              =  $_POST['mobile'] ;
                    $dateofbirth         =  $_POST['dob'] ;
                    $gender              =  $_POST['gender'] ;
                    $adds                =  $_POST['address'] ;
                    // $hobby               =  json_encode($_POST['hobby']);
                    $hobby               =  $_POST['hobby'];

                    
                    $hobby = implode(',', $hobby);
                    echo $hobby;

                    $ppassword           =  $_POST['createpassword'] ;
                    $confirm_password    =  $_POST['re_password'] ;

                    // $_FILES
                    $path = pathinfo($_FILES['image']['name']);
                    $base = $path['filename'];

                    $base = preg_replace("/[^\w-]/","_",$base);
            
                    
                    // $filename = $_FILES["file"]['name'];
                    $filename = $base .".".$path['extension'];
                    $destination = __DIR__.$filename;        //my storage
                    // $destination = "/mnt/drive3/dev/T9/sam/".$filename;   //sam rifluxyss access given
                    // exit($destination);


                    $image_name          =  $filename ;

                    
                    // if already folder have the same file
                    $i=1;
                    
                    while(file_exists($destination))
                    {
                        $filename = $base ."($i).".$path['extension'];
                         $destination =__DIR__.$filename;   //my storage
                        
                        // $destination = "/mnt/drive3/dev/T9/sam/".$filename;   //sam rifluxyss access given

                    
                        $i++;
                    }
                
                    if( !move_uploaded_file($_FILES['image']['tmp_name'],$destination) )
                    {
                        exit("can't upload....");
                    }
                
                    print_r($_FILES);
                    echo("file upload successfully....");
                  


                    $sql = "INSERT INTO  sign_up (firstname, lastname, email,mobile,gender,address_,hobby,create_password,confirm_password,date_of_birth,image_name) VALUES
                    ('$firstname','$lastname','$email','$mobile','$gender','$adds','$hobby','$ppassword','$confirm_password','$dateofbirth','$image_name') ";
                    $conn->exec($sql);
                    
                    $id = $conn->lastInsertId();
                    // echo $id;

                    // for login to store time in database 
                    $date = date('m-d-Y', time());
                    $time = date('h:i:s', time());

                    //$sql = "INSERT INTO  login_sam (id,email,login_date,login_time) VALUES ('$id','$email','$date','$time' ) ";
                    //company  $sql = "INSERT INTO  login_sam (id,email,login_date,login_time) VALUES ('$id','$email','current_date()','current_time()' ) ";
                    $sql = "INSERT INTO  login_sam (id,email,login_date,login_time) VALUES ('$id','$email',NOW(),NOW() ) ";


                    $conn->exec($sql);

                    
                    // Get the last inserted ID
                    // $lastId = $conn->lastInsertId();
                    // echo "";
                    // echo "<td>".$lastId."</td>";
                    // echo "<td>".$firstname."</td>";
                    // echo "<td>".$lastname."</td>";
                    // echo "<td>".$email."</td>";
                    // echo "<td>".$mobile."</td>";
                    // echo "<td>".$gender."</td>";
                    // echo "<td>".$adds."</td>";
                    // echo "<td>".$hobby."</td>";
                    // echo "<td>".$ppassword."</td>";
                    // echo "<td>".$confirm_password."</td>";
                    // echo "<td>".$dateofbirth."</td>";
                    // echo "<td><img class='img-fluid' src='../".$image_name."'  alt='ok' width=40px height=40px></td>";
                    // echo "<td><img class='img-fluid' src='"__DIR__."/Uploads/".$image_name."'  alt='ok' width=40px height=40px></td>";
                    // echo "<td> <a class='btn btn-success btn-sm shadow-none edit' href='/' data-bs-toggle='modal' data-bs-target='#edit' data-id='{$lastId}' >Edit</a> <a class='btn btn-danger btn-sm shadow-none delete' href='/' data-id='{$lastId}' >Delete</a> </td>"."\n";
                    // $i++;
                
                } 
                catch(PDOException $e) 
                {
                    echo $sql . "<br>" . $e->getMessage();
                }

                $conn = null;

    }
    echo "wrong";

?>