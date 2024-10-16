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
       
       <?php 
            if(isset($_POST['submit'])){
                $login = "0";
                if(!empty($_POST["userName"]) and !empty($_POST["password"])){
                      $userNameForm = $_POST["userName"]; 
                      $passwordForm = $_POST["password"];
                      include 'connection.php';

                      $sql = "SELECT * FROM admin2313";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          // echo "ID: " . $row["id"]. "  TITLE: " . $row["title"]. " " .  "<button type='button'>Click Me!</button>";
                          // echo "<br></br>";
                          $userNameDatabase = $row["userName"];
                          $passwordDatabase = $row["password"];
                          if(($userNameDatabase == $userNameForm) and ($passwordDatabase == $passwordForm)){
                             
                              session_start();
                              $_SESSION["userName"] = "$userNameForm";
                              break;
                          }
                          
                        }
                      } 
                }
                
            }
            
       ?>   
       
       <section>
          <?php 
              include 'navBar.php';
          ?>
      </section>
      <section >
         <div style="display: <?php  if(empty($_SESSION["userName"])){echo "block";} else {echo "none";} ?>;color:blue;text-align:center; margin: 100px; background-color: lightgray">
            <h1>Please Login Here</h1>
            <div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">UserName</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="userName">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    
                  </form>
            </div>
         </div>
      </section>
      <section>
               <div style="display: <?php  if(empty($_SESSION["userName"])){echo "none";} else {echo "block";} ?>;color:black;text-align:center; margin: 100px; background-color: lightgray; border-radius: 50px;">
                     <div style="padding: 80px 2%">
                          <h1>YOU ARE LOGGED IN ALREADY</h1>
                          <h4 style="color:gray;">NOW YOU HAVE ACCESS OFF ROUT OF THIS WEBSITE AS A ADMIN!</h4>
                     </div>
               </div>
      </section>
      <section>
               <?php 
                     include 'footer.php';
               ?>
      </section>
      
</body>
</html>