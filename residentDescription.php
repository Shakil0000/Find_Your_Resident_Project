<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     table, th, td {
     border:1px solid black;
     }
    </style>
</head>
<body style="background-color:lightskyblue">
     <?php  
          $n = $_GET['n'];
           //echo "id = $n <br/>";
          include 'connection.php';
          $sql = "SELECT * FROM resdata WHERE id >= $n ORDER BY id ASC LIMIT 1";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $namee = $row["name"];
                    $picPath = $row["picPath"];
                    $description = $row["description"];
                    $BoysOrGirl = $row["BoysOrGirl"];
                    $conditionn = $row["conditionn"];
                    $contactNumber = $row["contactNumber"];
                    $price = $row["price"];
                    $division = $row["division"];
                    $district = $row["district"];
                    $upazila = $row["upazila"];
                    //echo "id = $n , title = $title , picPath = $picPath----<br/>";
                  }          
          } 
          else {
                   // echo "0 results";
          }
     ?>
    
    <div s>
          <section>
                <?php 
                    include 'navBar.php';
                ?>
          </section>
          <section>
                    <div style="display:flex; justify-content:center;margin:30px auto">
                        <div>
                             <h1><?php echo"$namee";?></h1>
                        </div> 
                    </div>
          </section>
          <section>
                   <div style="display:flex; justify-content:center; margin:30px auto">
                        <img src="<?php echo"$picPath";?>"  alt="..." style="width:90%; height:400px">
                   </div>
          </section>
          <section>
                    <div style="display:flex; justify-content:center;margin:30px auto">
                        <div>
                              <table style="width:100%">
                                   <tr style="border:1px solid black;">
                                        <th style="border:1px solid black;">Price</th>
                                        <th style="border:1px solid black;"><?php echo"$price";?> Taka Only</th>
                                   </tr>
                                   <tr style="border:1px solid black;">
                                        <td style="border:1px solid black;">Type</td>
                                        <td style="border:1px solid black;"><?php echo"$BoysOrGirl";?></td>
                                   </tr>
                                   <tr style="border:1px solid black;">
                                        <td style="border:1px solid black;">Condition</td>
                                        <td style="border:1px solid black;"><?php echo"$conditionn";?></td>
                                   </tr>
                                   <tr style="border:1px solid black;">
                                        <td style="border:1px solid black;">Contact Number</td>
                                        <td style="border:1px solid black;"><?php echo"$contactNumber";?></td>
                                   </tr>
                                   <tr style="border:1px solid black;">
                                        <td style="border:1px solid black;">Division</td>
                                        <td style="border:1px solid black;"><?php echo"$division";?></td>
                                   </tr>
                                   <tr style="border:1px solid black;">
                                        <td style="border:1px solid black;">District</td>
                                        <td style="border:1px solid black;"><?php echo"$district";?></td>
                                   </tr>
                                   <tr style="border:1px solid black;">
                                        <td style="border:1px solid black;">Upazila</td>
                                        <td style="border:1px solid black;"><?php echo"$upazila";?></td>
                                   </tr>
                               </table>
                        </div> 
                    </div>
          </section>
          <section>
               <div>
                     <div style="display:flex; justify-content:center;">
                              <div style="width:90%;text-align:justify">
                                   <p><?php echo "$description"; ?></p>
                              </div>
                     </div>
                    
               </div>
          </section>
          
          <section>
               <?php 
                     include 'footer.php';
               ?>
          </section>
          
    </div>
</body>
</html>