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
            echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
            " has been uploaded";

            // upload data to Mysql Database
            $filePath = "uploads/".basename( $_FILES['uploaded_file']['name']);
            $title = $_POST["title"]; 
            $description = $_POST["description"]; 
            echo "//////";
            echo "$filePath";

            include 'connection.php';
            $sql = "insert into `article` (title, description, picPath) values('$title', '$description', '$filePath')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                header('Location: item.php');
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