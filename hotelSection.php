<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            
            <section>
                    <div style="display: flex; justify-content: center;">
                        <div style="width: 600px; background-color: rgb(0, 0, 255);">
                             <h2 style="text-align:center; color: white;">All Hotel Data Based On Your Location</h2>
                        </div>
                   </div>
                <?php 
                    include 'hotel.php';
                ?>
            </section>
            <section>
                <?php 
                    include 'footer.php';
                ?>
            </section>
      </div>
</body>
</html>