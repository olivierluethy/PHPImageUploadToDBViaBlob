<?php
if (isset($_GET['id'])) {
  require_once "db.php";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // sql to delete a record
  $sql = "DELETE FROM output_images WHERE imageid = ". $_GET['id']."";
  
  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: http://localhost/PHPImageUploadToDBViaBlob/listImages.php');
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
}
?>