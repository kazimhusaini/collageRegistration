<?php


$conn = mysqli_connect("localhost", "root", "", "stu");

$result = mysqli_query($conn,"SELECT * FROM student_record");
?>




<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/style1.css">
<title>Delete employee data</title>
</head>
<body>


 <div class="back">
<div class="container">
    <header class="header">
        
       <a class="link-title" href="/">Minimalistic Website</a>
        
    </header>
    
    <nav class="menu">
        
        <a href="index.php">Home</a> &nbsp; &nbsp; &nbsp; 
        <a href="about.php">About us</a> &nbsp; &nbsp; &nbsp; 
        <a href="contact.php">Contact</a>&nbsp; &nbsp; &nbsp;
         <a href="update.php">Data Lib</a>&nbsp; &nbsp; &nbsp;
        <a href="signup.php">Logout</a>
        <form action="sera.php" action="searching.php" method="post">

  <input id="search" name="search" type="search" autofocus><input type="submit" name="button">

</form>
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
<td><?php echo $row["f_name"]; ?></td>
<td><?php echo $row["l_name"]; ?></td>
<td><?php echo $row["bday"]; ?></td>
<td><?php echo $row["bmonth"]; ?></td>
<td><?php echo $row["byear"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["mnumber"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["addres"]; ?></td>
<td><?php echo $row["city"]; ?></td>
<td><?php echo $row["pin"]; ?></td>
<td><?php echo $row["country"]; ?></td>
<td><?php echo $row["state"]; ?></td>
<td><?php echo $row["hobby_draw"]; ?></td>

<td><?php echo $row["hobby_s"]; ?></td>
<td><?php echo $row["hobby_dance"]; ?></td>
<td><?php echo $row["hobby_c"]; ?></td>
<td><?php echo $row["hobby_o"]; ?></td>
<td><?php echo $row["o_hobby"]; ?></td>
<td><?php echo $row["class_x_board"]; ?></td>
<td><?php echo $row["class_x_percent"]; ?></td>
<td><?php echo $row["class_x_passing"]; ?></td>

<td><?php echo $row["class_xii_board"]; ?></td>
<td><?php echo $row["class_xii_percent"]; ?></td>
<td><?php echo $row["class_xii_passing"]; ?></td>
<td><?php echo $row["c_bca"]; ?></td>
<td><?php echo $row["c_bcom"]; ?></td>
<td><?php echo $row["c_bsc"]; ?></td>
<td><?php echo $row["c_ba"]; ?></td>



<td><button type="submit" name="submit" class="submit-btn1"><a href="p.php?id=<?php echo $row["id"]; ?>">Update</a></button></td>
<td><button type="submit" name="submit" class="submit-btn1"><a href="del_stu.php?id=<?php echo $row["id"]; ?>">Delete_</a></button></td>

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