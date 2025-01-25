<div class="mx-2">
        <h2 class=text-center>List of Member</h2>
        <a class="btn btn-primary shadow-none " href="/" role="button" data-bs-toggle='modal' data-bs-target='#newuser'>New User</a>
        <br>

        <div id="demo" class=" table-responsive shadow-lg p-3 mt-3 bg-body rounded text-danger" >Table:
                    <table class="table  table-bordered  table- form-text">
                      <thead class="">
                          <tr class=" align-middle text-center" >
                              <td class="text-dark">Id</td>
                              <td class="text-dark">First_Name</td>
                              <td class="text-dark">Last_Name</td>
                              <td class="text-dark">Email</td>
                              <td class="text-dark">Mobile</td>
                              <td class="text-dark">Gender</td>
                              <td class="text-dark">Address</td>
                              <td class="text-dark">Hobby</td>
                              <td class="text-dark">Password</td>
                              <td class="text-dark">Confirm_Password</td>
                              <td class="text-dark">Date-Of-Birth</td>
                              <td class="text-dark">Profile</td>
                          </tr>
                      </thead>
                      <tbody>

            <?php

                /*class TableRows extends RecursiveIteratorIterator {
                  function __construct($it) {
                    parent::__construct($it, self::LEAVES_ONLY);
                  }
                
                  function current() {
                    return "<td>" . parent::current(). "</td>";
                  }
                
                  function beginChildren() {
                    echo "<tr>";
                  }
                
                  function endChildren() {
                    echo "<td> <a class='btn btn-primary btn-sm' href='/' data-bs-toggle='modal' data-bs-target='#sign_up' >Edit</a> <a class='btn btn-primary btn-sm' href='/'>Delete</a> </td> </tr>"."\n";
                  }
                }*/
              
                /*$servername = "localhost";
                $username = "training";
                $password = "training";
                $dbname = "training";*/

                $servername = "localhost";
                $username = "root";
                $password = "1111";
                $dbname = "rifluxyss";


                try 
                {
                
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                
                    // $stmt = $conn->prepare("SELECT * FROM sign_up");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt->execute();
                
                    /*
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
                    {
                            echo $v;
                    }
                    */

                    $stmt = $conn->prepare('SELECT * FROM sign_up'); // Replace 'users' with your table name
            
                    $stmt->execute();
            
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        if ($results) 
                        {
                            // Print table rows
                            $i=1;
                            foreach ($results as $row) 
                            {
                                echo "<tr class=' align-middle'><td>$i</td>";
                                echo "<td>" . htmlspecialchars($row['firstname']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['lastname']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['mobile']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['address_']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['hobby']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['create_password']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['confirm_password']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['date_of_birth']) . "</td>";
                                // echo "<td><img class='img-fluid' src='".'/Uploads/'.$row['image_name']."'  alt='ok' width=40px height=40px></td>";
                                echo "<td><img class='img-fluid' src='http://t9.rifluxyss.com/sam/".$row["image_name"]."'  alt='ok' width=40px height=40px></td>";


                                /*foreach ($row as $cell) 
                                {
                                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                                }*/
                                echo "<td class='p-3 text-center'> <a class='btn btn-success btn-sm shadow-none my-2 edit' href='/' data-bs-toggle='modal' data-bs-target='#edit' data-id='{$row["id"]}'>Edit</a> <a class='btn btn-danger btn-sm shadow-none delete' data-id='{$row["id"]}' href='/'>Delete</a> </td> </tr>"."\n";
                                $i++;

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
               </tbody>
            </table>
        </div>
    </div>
