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
              if(!empty($_POST["userName"]) and !empty($_POST["password"])){
                $userName = $_POST["userName"]; 
                $passwordd = $_POST["password"]; 
             
                include 'connection.php';
                $sqll = "insert into `admin2313` (userName, password) values('$userName', '$passwordd')";
                if ($conn->query($sqll) === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }
              }else {
                echo '<h1 style ="color:red;">Please Input Correctly</h1>' ;
              }
            }
            
       ?>   

      
      <section >
         <div style="color:blue;text-align:center; margin: 100px; background-color: lightgray">
            <h1>Make Admin Someone</h1>
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
      
</body>
</html>