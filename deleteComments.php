<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
          <?php  
                include 'connection.php';
                $n = $_GET['id'];
                // sql to delete a record
                    $sql = "DELETE FROM comment01 WHERE id=$n";

                    if ($conn->query($sql) === TRUE) {
                        echo "Record deleted successfully";
                        header('Location: item.php');
                         
                    } 
                    else {
                    echo "Error deleting record: " . $conn->error;
                    }

                    $conn->close();
            
            
            
            
            ?>
</body>
</html>