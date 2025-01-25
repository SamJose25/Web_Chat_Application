<?php
    include('database.php');
    
    $action           =  $_POST['signup'];

    if( $action == "signup"){
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
        //echo $hobby;
        
        $ppassword           =  $_POST['createpassword'] ;
        $confirm_password    =  $_POST['re_password'] ;
        
        // $_FILES
        $path = pathinfo($_FILES['image']['name']);
        $base = $path['filename'];
        
        $base = preg_replace("/[^\w-]/","_",$base);
        
        
        // $filename = $_FILES["file"]['name'];
        $filename = $base .".".$path['extension'];
        
        $destination = __DIR__."/".$filename;        //my storage

        $i=1;
        while(file_exists($destination))
        {
            $filename = $base ."($i).".$path['extension'];
            $destination =__DIR__."/".$filename;   //my storage
            //echo $destination;
                // $destination = "/mnt/drive3/dev/T9/sam/".$filename;   //sam rifluxyss access given
            
            $i++;
        }
        $image_name          =  $filename ;
        
        if( !move_uploaded_file($_FILES['image']['tmp_name'],$destination) )
        {
            exit("can't upload....");
        }
        
        //print_r($_FILES);
        //echo("file upload successfully....");

        
        $sql = "INSERT INTO sign_up (firstname, lastname, email, mobile, gender, address_, hobby, create_password, confirm_password, date_of_birth, image_name ) VALUES (:firstname, :lastname, :email, :mobile, :gender, :address_, :hobby, :create_password, :confirm_password, :date_of_birth, :image_name)";
        
            // Prepare the statement
            $stmt = $conn->prepare($sql);
        
            // Bind the values to the placeholders
            $stmt->bindParam(':firstname', $firstname, PDO::PARAM_STR);
            $stmt->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
            $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
            $stmt->bindParam(':address_', $adds, PDO::PARAM_STR);
            $stmt->bindParam(':hobby', $hobby, PDO::PARAM_STR);
            $stmt->bindParam(':create_password', $ppassword, PDO::PARAM_STR);
            $stmt->bindParam(':confirm_password', $confirm_password, PDO::PARAM_STR);
            $stmt->bindParam(':date_of_birth', $dateofbirth, PDO::PARAM_STR);
            $stmt->bindParam(':image_name', $image_name, PDO::PARAM_STR);
        
            // Execute the prepared statement
            $stmt->execute();
            //echo "Execute";

            $id = $conn->lastInsertId();
            $sql = "INSERT INTO  login_sam (id,email,login_date,login_time) VALUES ('$id','$email',NOW(),NOW() ) ";
            $conn->exec($sql);
    }else{
        $action   =  $_POST['action'];

        if($action == "login"){
            //$action           =  $_POST['action'] ;
            //echo "yes";
            $email              =  $_POST['email'];
            $password            =  $_POST['password'];
    
            $stmt = $conn->prepare('SELECT id,email,confirm_password FROM sign_up'); 
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            if ($results){
                foreach ($results as $row) {
                    if( ($row['email'] == $email) && ($row['confirm_password'] == $password) ){
                        session_start();
                        
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        
                        $id = $row['id'];
                        //$email_login = $row['email'];
                        
                        $sql = "UPDATE login_sam SET login_date =NOW() , login_time = CURRENT_TIME()   WHERE id =".$row['id'];
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
    
                        $status = "Success";
                        $message = "Login";
                        break;
                    }else if( ($row['email'] == $email) && ($row['confirm_password'] != $password) ){
                        $status  = "Failed";
                        $message = "Invalid Password";
                    }
                    else if( ($row['email'] != $email) && ($row['confirm_password'] != $password) ){
                        $status  = "Failed";
                        $message = "Invalid User & Password";
                    }
    
                    
                }
                $response = array();
                $response['status']     = $status;
                $response['msg']        = $message;    
                echo json_encode($response);
            } 
        }

    }    
    exit;
?>