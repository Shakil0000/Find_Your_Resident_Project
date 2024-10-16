<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
            <div style="display:none;">
                    <?php
                          session_start();
                          $name = "";
                          if(!empty($_SESSION["userName"])){
                            $name = $_SESSION["userName"];
                          }  
                          if (isset($_POST['logout'])) {
                            $name = "";
                            if(!empty($_SESSION["userName"])){
                              session_unset();
                              session_destroy();
                            }  
                        }
                       ?>
            </div>
           
            <section >
                  <nav style="margin-bottom: 10px;" class="navbar navbar-expand-lg bg-dark">
                      <div class="container-fluid">
                        <a style="color:white" class="navbar-brand " href="index.php">RESIDENCE DOT COM</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                              <a href="messSection.php" style="color:white" class="nav-link active" >MESS</a>
                            </li>
                            <li class="nav-item">
                              <a href="hotelSection.php" style="color:white" class="nav-link" >HOTEL</a>
                            </li>
                            <li class="nav-item">
                              <a href="houseSection.php" style="color:white" class="nav-link" >HOUSE</a>
                            </li>
                            <li class="nav-item">
                              <a href="location.php" style="color:white" class="nav-link" >LOCATION</a>
                            </li>
                            <li class="nav-item">
                              <a href="postAd.php" style="color:white" class="nav-link" >POST AD</a>
                            </li>
                            <li class="nav-item">
                              <a href="item.php" style="color:white" class="nav-link" >Admin</a>
                            </li>
                            <li class="nav-item">
                              <a href="login.php" style="color:white" class="nav-link">Login</a>
                            </li>
                          </ul>
                          <form action="" method="post" enctype="multipart/form-data" class="d-flex" role="search">
                            <!-- <input class="form-control me-2" type="submit" name="logout" value="Logout"> -->
                            <!-- <button style="color:white" class="btn btn-outline-success" type="submit">Logout</button> -->
                            <span class="form-control me-2" ><?php echo "$name"; ?></span>
                            <button type="submit" class="btn btn-primary" name="logout">Logout</button>
                          </form>
                        </div>
                      </div>
                    </nav>
                </section>

                

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>