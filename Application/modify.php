<?php
// $servername = "localhost";
// $username = "training";
// $password = "training";
// $dbname = "training";
include('database.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) 
        {
    
            print_r($_POST);
            echo $_FILES['image']['tmp_name'];

            $id           =  $_POST['id'] ;

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

            // for image name
                                // $_FILES
                                $path = pathinfo($_FILES['image']['name']);
                                $base = $path['filename'];
            
                                $base = preg_replace("/[^\w-]/","_",$base);
                        
                                
                                // $filename = $_FILES["file"]['name'];
                                $filename = $base .".".$path['extension'];
                                // $destination = "Uploads/".$filename;        //we need acces from rifluxyxss
                                $destination = "/mnt/drive3/dev/T9/sam/".$filename;   //sam rifluxyss access given
                                // exit($destination);
            
            
                                $image_name          =  $filename ;
            
                                
                                // if already folder have the same file
                                $i=1;
                                
                                while(file_exists($destination))
                                {
                                    $filename = $base ."($i).".$path['extension'];
                                    //  $destination ="Uploads/".$filename;   //we need access from rifluxyss
                                    
                                    $destination = "/mnt/drive3/dev/T9/sam/".$filename;   //sam rifluxyss access given
            
                                
                                    $i++;
                                }
                            
                                if( !move_uploaded_file($_FILES['image']['tmp_name'],$destination) )
                                {
                                    exit("can't upload....");
                                }
                            
                                print_r($_FILES);
                                echo("file upload successfully....");
            

            // $image_name          =  "filename";



            try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //   $sql = "UPDATE sign_up SET firstname ='$firstname', lastname='$lastname' WHERE id=3";
                    $sql = "UPDATE sign_up SET firstname='$firstname' , lastname = '$lastname' , email='$email' ,mobile = '$mobile', gender ='$gender' , address_='$adds',hobby='$hobby',create_password='$ppassword',confirm_password='$confirm_password' , date_of_birth='$dateofbirth', image_name='$image_name' WHERE id='$id'";

            
              // Prepare statement
              $stmt = $conn->prepare($sql);
            
              // execute the query
              $stmt->execute();
            
              // echo a message to say the UPDATE succeeded
              echo $stmt->rowCount() . " records UPDATED successfully";
            } catch(PDOException $e) {
              echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;

        }
        else
        {
            echo "Not connected";
        }
        


?>
