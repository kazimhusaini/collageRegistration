<?php


$conn = mysqli_connect("localhost", "root", "", "studata");

$result = mysqli_query($conn,"SELECT * FROM signup");
?>




<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Delete  data</title>
</head>
<body>


 <div class="back">
<div class="container">
    <header class="header">
        
       <a class="link-title" href="/">sigup data record</a>
        
    </header>
    
    <nav class="menu">
       <a href="index.php">Home</a> &nbsp; &nbsp; &nbsp; 
        <a href="student.php">Student-Registration</a> &nbsp; &nbsp; &nbsp;
         <a href="stu_tbl.php">Student-Record</a> &nbsp; &nbsp; &nbsp;
          <a href="about.php">About us</a> &nbsp; &nbsp; &nbsp; 
          <a href="contact.php">Contact</a>&nbsp; &nbsp; &nbsp;
         <a href="update.php">Profile</a>&nbsp; &nbsp; &nbsp;
        <a href="signup.php">Logout</a>
    </nav>

<table>
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>password</td>
<td>Email id</td>
<td>Action</td>
</tr>
<?php

$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["first_name"]; ?></td>
<td><?php echo $row["last_name"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><button type="submit" name="submit" class="submit-btn1"><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></button></td>
<td><button type="submit" name="submit" class="submit-btn1"><a href="del.php?id=<?php echo $row["id"]; ?>">Delete_</a></button></td>

</tr>
<?php
$i++;
}
?>
</table>
</div>
</div>

</body>
</html>