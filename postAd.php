<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <section>
                <?php 
                    include 'navBar.php';
                ?>
        </section>

         <!--Posting Ad---------------------- -->
         <section >
                  <!-- Item Insert Here---------------------------------------- -->
                    <section>
                          <div style="color:blue;text-align:center; margin: 100px; background-color: lightgray">
                              <h1>POST YOUR AD FOR FREE</h1>
                              <div>
                                <form action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Picture</label>
                                          <input type="file" class="form-control" name="uploaded_file">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Name</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="name">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Mess , Hotel or Home</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="MessHotelHome">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">For Boys or Girl or Both</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="BoysOrGirl">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Condition</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="condition">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Price</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="price">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                                          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="contactNumber">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                      </div>
                                      <input type="submit" class="btn btn-primary" value="Submit" name="submit"></input>
                                </form>
                              </div>
                          </div>
                    </section>
         <!-- Footer-------------------------------------------------------------------------------- -->
         <section>
                 <?php 
                      include 'footer.php';
                 ?>
        </section>
        <section>
            <?PHP
                if(!empty($_FILES['uploaded_file']))
                {
                $path = "uploads/";
                $path = $path . basename( $_FILES['uploaded_file']['name']);

                if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                echo "The file ". basename( $_FILES['uploaded_file']['name']).
                " has been uploaded";

                // upload data to Mysql Database
                $filePath = "uploads/".basename( $_FILES['uploaded_file']['name']);
                $name = $_POST["name"];
                $MessHotelHome = $_POST["MessHotelHome"];
                $BoysOrGirl = $_POST["BoysOrGirl"];
                $conditionn = $_POST["condition"];
                $price = $_POST["price"];
                $contactNumber = $_POST["contactNumber"];
                $description = $_POST["description"];
                $division =  $_SESSION["division"];
                $district =  $_SESSION["district"];
                $upazila =  $_SESSION["upazila"];
                echo "//////";
                echo "$filePath";

                                    include 'connection.php';
                                    $sql = "insert into `resdata` (picPath,name,MessHotelHome,BoysOrGirl,conditionn,price,contactNumber,description,division,district,upazila) values('$filePath','$name','$MessHotelHome','$BoysOrGirl','$conditionn' , ' $price', ' $contactNumber' , '$description', '$division' , '$district' , '$upazila')";
                                    if ($conn->query($sql) === TRUE) {
                                        echo "New record created successfully";
                                        
                                        
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                    }

                } else{
                echo "There was an error uploading the file, please try again!";
                }
                }



            ?>
        </section>
    </div>
</body>
</html>