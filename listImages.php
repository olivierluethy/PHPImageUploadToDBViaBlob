<?php
    require_once "db.php";
    $sql = "SELECT imageId FROM output_images ORDER BY imageId DESC"; 
    $result = mysqli_query($conn, $sql);
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
    <div class="gallery">
        <?php while($row = mysqli_fetch_array($result)) { ?>
            <div class="image">
		        <img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" /><br>
                <button>Delete</button>
            </div>
<?php		
	    }
        mysqli_close($conn);
?>
    </div>
</body>
</html>