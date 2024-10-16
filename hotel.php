<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <section>
              <div style="display:grid; grid-template-columns: repeat(3, 1fr); margin:50px 0px; background-color:lightgreen; padding:100px 5%; grid-row-gap:30px;">
              <?php
                include 'connection.php';
                $MessHotelHome = "Hotel";
                $upazila = $_SESSION["upazila"];
                $sql = "SELECT * FROM resdata WHERE MessHotelHome = '$MessHotelHome' AND upazila = '$upazila'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                
                while($row = $result->fetch_assoc()) {
                     $id = $row["id"];
                     $name = $row["name"];
                     $description = $row["description"];
                     $picPath = $row["picPath"];
                     $price = $row["price"];
                     
                     
                     

                     echo '
                         <div class="card col-sm-4" style="width: 18rem;">
                                 <img src="'.$picPath.'" class="card-img-top" alt="...">
                                     <div class="card-body">
                                         <h5 class="card-title">'.$name.'</h5>
                                         <h5 class="card-title">Price: '.$price.'</h5>
                                         <div style="width:100%; height:80px; overflow:hidden; text-align:justify">
                                               <p class="card-text">'.$description.'</p>
                                         </div>
                                         <a href="'."residentDescription.php?n=".$id.'" class="btn btn-primary">Details</a>
                                     </div>
                         </div>
                     ';
                    
                }
              
                } else {
                echo "There is no data to show or Something wrong";
                }
        ?>
              </div>
     </section>
</body>
</html>