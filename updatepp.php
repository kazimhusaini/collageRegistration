
<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if(count($_POST)>0) {





mysqli_query($conn,"UPDATE student_record set 



  id='" . $_POST['id'] 
  . "',f_name='" . $_POST['f_name'] 
  . "', l_name='" . $_POST['l_name'] 
  . "',bday='" . $_POST['bday'] 
  . "' , bmonth='" . $_POST['bmonth'] 
  . "' ,byear='" . $_POST['byear'] 
  . "' , email='" . $_POST['email'] 
  . "' , mnumber='" . $_POST['mnumber'] 
  . "' ,gender='" . $_POST['gender'] 
  . "' , addres='" . $_POST['addres'] 
  . "' ,city='" . $_POST['city'] 
  . "' ,pin='" . $_POST['pin'] 
  . "' ,state='" . $_POST['state'] 
  . "' ,country='" . $_POST['country'] 
  . "' ,hobby_draw='" . $_POST['hobby_draw'] 

  . "' ,hobby_s='" . $_POST['hobby_s'] 
  ."' ,hobby_dance='" . $_POST['hobby_dance'] 
  . "' ,hobby_c='" . $_POST['hobby_c']
 . "' , hobby_o='" . $_POST['hobby_o']
  . "' , o_hobby='" . $_POST['o_hobby'] 
  . "' ,class_x_board='" . $_POST['class_x_board'] 
 . "',class_x_percent='" . $_POST['class_x_percent'] 
. "' ,class_x_passing='" . $_POST['class_x_passing'] 
. "' ,class_xii_board='" . $_POST['class_xii_board'] 
 . "' ,class_xii_percent='" . $_POST['class_xii_percent'] 
. "' ,class_xii_passing='" . $_POST['class_xii_passing'] 
. "' ,c_bca='" . $_POST['c_bca'] 

. "' ,c_bcom='" . $_POST['c_bcom'] 
. "' ,c_bsc='" . $_POST['c_bsc'] 
. "' ,c_ba='" . $_POST['c_ba'] 
. "'  WHERE id='" . $_POST['id'] . "'");


$message = "Record Modified Successfully";




}

?>

