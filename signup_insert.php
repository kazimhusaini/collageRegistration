<?php

 $conn = mysqli_connect("localhost", "root", "", "studata");

if (isset($_POST['submit'])) {
 
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$e_name=$_POST['e_name'];
$password=$_POST['password'];
        
$sql="INSERT INTO `signup`( `first_name`, `last_name`, `email`, `password`) VALUES ('$f_name','$l_name','$e_name','$password')";



    mysqli_query($conn,$sql);
    echo "data has beeen submitted";
    header("Location: signup.php");
exit();
  


   }
?>
