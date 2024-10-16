<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
// These code for image upload to uploads folder or directory
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
echo "//////";
echo "$filePath";

                     include 'connection.php';
                     $sql = "insert into `resdata` (picPath,name,MessHotelHome,BoysOrGirl,conditionn,price,contactNumber,description) values('$filePath','$name','$MessHotelHome','$BoysOrGirl','$conditionn' , ' $price', ' $contactNumber' , '$description')";
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

</body>
</html>