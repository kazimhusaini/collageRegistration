
<?php

 $conn = mysqli_connect("localhost", "root", "", "project");

if (isset($_POST['submit'])) {
 
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$b_day=$_POST['b_day'];
$b_Month=$_POST['b_Month'];
$b_Year=$_POST['b_Year'];
$e_name=$_POST['e_name'];
$m_Number=$_POST['m_Number'];

$address=$_POST['address'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$state=$_POST['state'];
$Country=$_POST['Country'];
$ClassX_Board=$_POST['ClassX_Board'];
$ClassX_Percentage=$_POST['ClassX_Percentage'];
$ClassX_YrOfPassing=$_POST['ClassX_YrOfPassing'];
$ClassXII_Board=$_POST['ClassXII_Board'];
$ClassXII_Percentage=$_POST['ClassXII_Percentage'];
$ClassXII_YrOfPassing=$_POST['ClassXII_YrOfPassing'];

$sql="INSERT INTO `student_record`(`f_name`, 
`l_name`,
 `bday`, 
 `bmonth`, 
 `byear`,
  `email`,
   `mnumber`, 

   `addres`, 
   `city`, 
   `pin`, 
   `state`,
    `country`,
           `class_x_board`,
            `class_x_percent`,
             `class_x_passing`, 
             `class_xii_board`, 
             `class_xii_percent`, 
             `class_xii_passing`)
  
VALUES ('$f_name',
'$l_name',
'$b_day',
'$b_Month',
'$b_Year',
'$e_name',
'$m_Number',
'$address',
'$city',
'$pin',
'$state',
'$Country',
'$ClassX_Board',
'$ClassX_Percentage',
'$ClassX_YrOfPassing',
'$ClassXII_Board',
'$ClassXII_Percentage',
'$ClassXII_YrOfPassing',)";

    mysqli_query($conn,$sql);
   
// header("Location: index.php");
 echo "data has beeen submitted";
exit();
  
 


   }





?>
