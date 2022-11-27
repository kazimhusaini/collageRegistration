
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: red">

<?php

$conn = mysqli_connect("localhost", "root", "", "project");

$id_rec=$_POST['id'];


 $qry = "DELETE FROM signup WHERE id =$id_rec";
 
 if ($conn->query($qry) == TRUE) {
  echo "Record deleted successfully";
  location:"update.php";
  
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
<a href="update.php">view</a>
</body>
</html>
