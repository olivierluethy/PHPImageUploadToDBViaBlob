<?php
    require_once "db.php";
    $sql = "SELECT imageId FROM output_images ORDER BY imageId DESC"; 
    $result = mysqli_query($conn, $sql);

    if ($result=mysqli_query($conn,$sql))
    {
        // Return the number of rows in result set
        $rowcount=mysqli_num_rows($result);
        // printf("Result set has %d rows.\n",$rowcount);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/imageStyles.css" rel="stylesheet" type="text/css" />
    <title>List BLOB Images</title>
</head>

<body>

    <div class="grid-container">
        <?php
        if ($rowcount > 0){
            
            while($row = mysqli_fetch_array($result)) {
                echo "<div class='image'>
                        <img src='imageView.php?image_id= ". $row['imageId'] ."' /><br>
                        <button onclick='deleteImage(" . $row['imageId'] . ")'>Delete</button>
                    </div>";
            }
            mysqli_close($conn);

        }else {
            echo "<h1>Es hat keine Bilder</h1>";
        }
        ?>
    </div>

    <a href="index.php">Weitere Bilder hochladen</a>
    <script src="js/main.js"></script>
</body>

</html>