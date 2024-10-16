<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background-color: gray;">

    <div>
      
        <section>
                <?php 
                    include 'navBar.php';
                ?>
        </section>
       
        <section style="display: <?php  if(empty($_SESSION["userName"])){echo "none";} else {echo "block";} ?>">
                    <!-- Making someone Admin Here -->
                    <section>
                            <?php  
                                  include 'makeAdmin.php';
                            ?>
                    </section>
                    <!-- Admin Delete part -->
                    <section>
                            <div style="color:blue;text-align:center; margin: 100px; background-color: lightgray">
                            <h1>All Admin List</h1>
                            <?php
                                    include 'connection.php';
                                    $sql = "SELECT * FROM admin2313";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        // echo "ID: " . $row["id"]. "  TITLE: " . $row["title"]. " " .  "<button type='button'>Click Me!</button>";
                                        // echo "<br></br>";
                                        $id = $row["id"];
                                        $userName = $row["userName"];
                                        echo "
                                              <table style='width:100%; border:1px solid blue;'>
                                                <tr> <td style='width:10%; border:1px solid gray'>ID:$id</td>   <td style='width:60%; border:1px solid gray'>User_Name:$userName</td>  <td style='width:10%; border:1px solid gray'><a  href='deleteAdmin.php?id=$id'><button class = 'btn btn-primary'>Delete</button></a></td></tr>
                                              </table>
                                            ";
                                      }
                                    } 
                                    else {
                                      echo "0 Admin";
                                    }
                              ?>
                            </div>
                    </section>

                    <!-- Item Delete part -->
                    <section>
                            <div style="color:blue;text-align:center; margin: 100px; background-color: lightgray">
                            <h1>All Blog List</h1>
                            <?php
                                    include 'connection.php';
                                    $sql = "SELECT * FROM resdata";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        // echo "ID: " . $row["id"]. "  TITLE: " . $row["title"]. " " .  "<button type='button'>Click Me!</button>";
                                        // echo "<br></br>";
                                        $id = $row["id"];
                                        $namm = $row["name"];
                                        echo "
                                              <table style='width:100%; border:1px solid blue;'>
                                                <tr> <td style='width:10%; border:1px solid gray'>ID:$id</td>   <td style='width:60%; border:1px solid gray'>Name:$namm</td>  <td style='width:10%; border:1px solid gray'><a href='deleteItem.php?id=$id'><button class = 'btn btn-primary'>Delete</button></a></td></tr>
                                              </table>
                                            ";
                                      }
                                    } else {
                                      echo "0 results";
                                    }
                              ?>
                            </div>
                    </section>
        </section>
 </section>

        <!-- Ridirect to Login Section-------------------------------- -->
        <section>
                <div style="display: <?php  if(empty($_SESSION["userName"])){echo "block";} else {echo "none";} ?>;color:gray;text-align:center; margin: 100px; background-color: lightgray; border-radius: 50px;">
                   <div style="padding:100px 2%;">
                          <h2 style="color: black;">ATTENTION PLEASE!!!!!!!!!!</h2>
                          <h4>This Section is Only For Admin</h4>
                          <h5 style="color:gray;">If You are Admin , Please login First.Outherwise you will never get access to this route.</h5>
                   </div>
                </div>
        </section>
        
        <!-- Footer-------------------------------------------------------------------------------- -->
        <section>
                 <?php 
                      include 'footer.php';
                 ?>
        </section>
        
      </div>
      
</body>
</html>