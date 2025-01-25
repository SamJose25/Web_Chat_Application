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
                    

                    

                    echo $id =$_POST['id'];
                    // exit();
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
                    $filename = $base .".".$path['extension'];
                    $destination = "/mnt/drive3/dev/T9/sam/".$filename;   //sam rifluxyss access given

                    $image_name          =  $filename ;

                    // if already folder have the same file
                    $i=1;
                    while(file_exists($destination))
                    {
                        $filename = $base ."($i).".$path['extension'];
                        $destination = "/mnt/drive3/dev/T9/sam/".$filename;   //sam rifluxyss access given
                        $i++;
                    }
                
                    if( !move_uploaded_file($_FILES['image']['tmp_name'],$destination) )
                    {
                        exit("can't upload....");
                    }
                
                    print_r($_FILES);
                    echo("file upload successfully....");

                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // $sql = "UPDATE sign_up SET  WHERE id=".$_POST['id'];
                    // $sql = "UPDATE sign_up SET firstname='$firstname' , lastname = '$lastname' , email='$email' ,mobile = '$mobile', gender ='$gender' , address_='$adds',hobby='$hobby',create_password='$ppassword',confirm_password='$confirm_password' ,date_of_birth='$dateofbirth',image_name='$image_name' WHERE id=".$_POST['id'];

                    $sql = "UPDATE sign_up SET firstname=".$_POST['first_name']."lastname =".$_POST['last_name']."email =".$_POST['email_name']."mobile =".$_POST['mobile']."date_of_birth =".$_POST['dob']."gender =".$_POST['gender']."address =".$_POST['address_']."create_password =".$_POST['createpassword']."confirm_password =".$_POST['re_password']."hobby =".$_POST['hobby'] ."WHERE id=2";



                    // $sql = "UPDATE sign_up SET firstname='' , lastname='', email='' ,mobile='' ,gender='' ,address_='' ,hobby='',create_password='',confirm_password='',date_of_birth='' ,image_name='' WHERE id=1";

                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    echo $stmt->rowCount() . " records UPDATED successfully";

                
                } 
                catch(PDOException $e) 
                {
                    echo $sql . "<br>" . $e->getMessage();
                }

                $conn = null;

    }
    echo "wrong";

?>