<?php


$conn = mysqli_connect("localhost", "root", "", "project");

$result = mysqli_query($conn,"SELECT * FROM student_record");
?>



  
<!DOCTYPE html>
<html>
<head>


<title>Student Record</title>

<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>


 <div class="back">
<div class="container">
    <header class="header">
        
       <a class="link-title" href="/">Minimalistic Website</a>
        
    </header>
    
    <nav class="menu">
        
        <a href="index.php">Home</a> &nbsp; &nbsp; &nbsp; 
          <a href="student.php">Student-Registration</a> &nbsp; &nbsp; &nbsp;
          <a href="stu_tbl.php">Student-Record</a> &nbsp; &nbsp; &nbsp;
        <a href="about.php">About us</a> &nbsp; &nbsp; &nbsp; 
        <a href="contact.php">Contact</a>&nbsp; &nbsp; &nbsp;
         <a href="update.php">profile</a>&nbsp; &nbsp; &nbsp;

        <a href="signup.php">Logout</a>
         <form action="sera.php" action="searching.php" method="post">

  <input id="search" name="search" type="search" autofocus><input type="submit" name="button">

</form>
    </nav>

<table id="tbl">
<tr>
<td>Id</td>
<td>FirstName</td>
<td>LastName</td>
<td>DateofBirth</td>

<td>Email</td>
<td>Mobile</td>
<td>Gender</td>
<td>Address </td>
 

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
<td><?php echo $row["bday"]; ?><?php echo $row["bmonth"]; ?><?php echo $row["byear"]; ?></td>

<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["mnumber"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["addres"]; ?></td>

  <td><button type="submit" name="submit" class="submit-btn1"><a href="update_stu.php?id=<?php echo $row["id"]; ?>">Update</a></button></td>
<td><button type="submit" name="submit" class="submit-btn1"><a href="del_stu.php?id=<?php echo $row["id"]; ?>">Delete_</a></button></td>






</tr>
<?php
$i++;
}
?>

</table>

<?php


$conn = mysqli_connect("localhost", "root", "", "project");

$result = mysqli_query($conn,"SELECT * FROM student_record");
?>


<div class=" tdd">
<table  >
<tr>

<td>postalcode</td>
<td>provence</td>
<td>City</td>
<td>Country</td>
<td>Hobbies </td>
<td>Class10Record </td>
<td>Class12Record</td>
<td>Appliedcources</td>  
</div>
</tr>

<br><br>
<?php

$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">

<td><?php echo $row["city"]; ?></td>
<td><?php echo $row["pin"]; ?></td>
<td><?php echo $row["state"]; ?></td>
<td><?php echo $row["country"]; ?></td>
<td><?php echo $row["hobby_draw"]; ?><?php echo $row["hobby_s"]; ?><?php echo $row["hobby_dance"]; ?><?php echo $row["hobby_c"]; ?><?php echo $row["hobby_o"]; ?><?php echo $row["o_hobby"]; ?></td>


<td><?php echo $row["class_x_board"]; ?><?php echo $row["class_x_percent"]; ?><?php echo $row["class_x_passing"]; ?></td>

<td><?php echo $row["class_xii_board"]; ?><?php echo $row["class_xii_percent"]; ?><?php echo $row["class_xii_passing"]; ?></td>

<td><?php echo $row["c_bca"]; ?><?php echo $row["c_bcom"]; ?><?php echo $row["c_bsc"]; ?><?php echo $row["c_ba"]; ?></td>

<td><button type="submit" name="submit" class="submit-btn1"><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></button></td>
<td><button type="submit" name="submit" class="submit-btn1"><a href="del_stu.php?id=<?php echo $row["id"]; ?>">Delete_</a></button></td>




</tr>
<?php
$i++;
}
?>


</table>
</div></div></body>
</html>

