<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/style1.css">

<table>
<tr>
<td><h2><b>Id</h2></b></td>
<td><h2><b>First Name</h2></b></td>
<td><h2><b>Last Name</h2></b></td>
<td><h2><b>password</h2></b></td>
<td><h2><b>Email id</h2></b></td>


</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "project");


if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];

$result = mysqli_query($conn,"SELECT * FROM `signup` WHERE  id like '%{$search}%' || 
  first_name like '%{$search}%' 
  ||last_name like '%{$search}%'
  || email like '%{$search}%' 
  || password like '%{$search}%'

   ");

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
  echo '<tr> 
                 <td><h3>'.$row["id"].'</h3></td> 
                 <td><h3>'.$row["first_name"].'</h3></td>  
                  <td><h3>'.$row["last_name"].'</h3></td> 
                  <td><h3>'.$row["email"].'</h3></td> 
                  <td><h3>'.$row["password"].'</h3></td> 
                <td><button type="submit" name="submit" class="submit-btn1"><a href="update.php?id=<?php echo $row["id"]; ?>BACK</a></button></td>

                </td>

       
        
              </tr> ';
  }
}else{
    echo "No data Found<br><br>";
  }

}else{                          //while not in use of search  returns all the values
  $result=mysqli_query("SELECT * FROM `signup` ");


  while ($row = mysqli_fetch_array($result)) {
     echo '<tr> 
                 <td><h3>'.$row["id"].'</h3></td> 
                 <td><h3>'.$row["first_name"].'</h3></td>  
                  <td><h3>'.$row["last_name"].'</h3></td> 
                  <td><h3>'.$row["email"].'</h3></td> 
                  <td><h3>'.$row["password"].'</h3></td> 
              

                </td>

       
        
              </tr> ';
  }
}

  
?>
</table>


<table>
<tr>
<td>Id</td>
<td>FirstName</td>
<td>LastName</td>
<td>DateofBirth</td>

<td>Email</td>
<td>Mobile</td>
<td>Gender</td>
<td>Address </td>
<td>postalcode</td>
<td>provence</td>
<td>City</td>
<td>Country</td>
<td>Hobbies </td>
<td>Class10Record </td>
<td>Class12Record</td>
<td>Appliedcources</td> 

</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "project");


if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];

$result = mysqli_query($conn,"SELECT * FROM `student_record` WHERE  
id like '%{$search}%' 
||f_name like '%{$search}%' 
||l_name like '%{$search}%'
||bday like '%{$search}%' 
||bmonth like '%{$search}%'

||byear like '%{$search}%' 
||email like '%{$search}%'
||mnumber like '%{$search}%' 
||gender like '%{$search}%'
||addres like '%{$search}%' 
||city like '%{$search}%'
||pin like '%{$search}%' 
||state like '%{$search}%'
||country like '%{$search}%' 
||hobby_draw like '%{$search}%'
||hobby_s like '%{$search}%' 
||hobby_dance like '%{$search}%'


||hobby_c like '%{$search}%' 
||hobby_o like '%{$search}%'
||o_hobby like '%{$search}%' 
||class_x_board like '%{$search}%'
||class_x_percent like '%{$search}%' 
||class_x_passing like '%{$search}%'
||class_xii_board like '%{$search}%' 
||class_xii_percent like '%{$search}%'
||class_xii_passing like '%{$search}%' 
||c_bca like '%{$search}%'
||c_bcom like '%{$search}%' 
||c_bsc like '%{$search}%'z
||c_ba like '%{$search}%'
   ");

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
  echo '<tr> 
                 <td><h3>'.$row["id"].'</h3></td> 
                 <td><h3>'.$row["f_name"].'</h3></td>  
                  <td><h3>'.$row["l_name"].'</h3></td> 
                  <td><h3>'.$row["bday"].'</h3></td> 
                  <td><h3>'.$row["bmonth"].'</h3></td> 

                    <td><h3>'.$row["byear"].'</h3></td> 
                 <td><h3>'.$row["email"].'</h3></td>  
                  <td><h3>'.$row["mnumber"].'</h3></td> 
                  <td><h3>'.$row["gender"].'</h3></td> 
                  <td><h3>'.$row["addres"].'</h3></td> 

                     <td><h3>'.$row["city"].'</h3></td> 
                 <td><h3>'.$row["pin"].'</h3></td>  
                  <td><h3>'.$row["state"].'</h3></td> 
                  <td><h3>'.$row["country"].'</h3></td> 
                  <td><h3>'.$row["hobby_draw"].'</h3></td> 
                     <td><h3>'.$row["hobby_s"].'</h3></td> 
                 <td><h3>'.$row["hobby_dance"].'</h3></td>  
                  <td><h3>'.$row["hobby_c"].'</h3></td> 
                  <td><h3>'.$row["hobby_o"].'</h3></td> 
                  <td><h3>'.$row["o_hobby"].'</h3></td> 

                       <td><h3>'.$row["class_x_board"].'</h3></td> 
                 <td><h3>'.$row["class_x_percent"].'</h3></td>  
                  <td><h3>'.$row["class_x_passing"].'</h3></td> 
                  <td><h3>'.$row["class_xii_board"].'</h3></td> 
                  <td><h3>'.$row["class_xii_percent"].'</h3></td> 

                    <td><h3>'.$row["class_xii_passing"].'</h3></td> 
                 <td><h3>'.$row["c_bca"].'</h3></td>  
                  <td><h3>'.$row["c_bcom"].'</h3></td> 
                  <td><h3>'.$row["c_bsc"].'</h3></td> 
                  <td><h3>'.$row["c_ba"].'</h3></td> 

                <td><button type="submit" name="submit" class="submit-btn1"><a href="stu_tbl.php?id=<?php echo $row["id"]; ?>BACK</a></button></td>

                </td>

       
        
              </tr> ';
  }
}else{
    echo "No data Found<br><br>";
  }

}else{                          //while not in use of search  returns all the values
  $result=mysqli_query("SELECT * FROM `student_record` ");


  while ($row = mysqli_fetch_array($result)) {
     echo '<tr> 
                     <td><h3>'.$row["id"].'</h3></td> 
                 <td><h3>'.$row["f_name"].'</h3></td>  
                  <td><h3>'.$row["l_name"].'</h3></td> 
                  <td><h3>'.$row["bday"].'</h3></td> 
                  <td><h3>'.$row["bmonth"].'</h3></td> 

                    <td><h3>'.$row["byear"].'</h3></td> 
                 <td><h3>'.$row["email"].'</h3></td>  
                  <td><h3>'.$row["mnumber"].'</h3></td> 
                  <td><h3>'.$row["gender"].'</h3></td> 
                  <td><h3>'.$row["addres"].'</h3></td> 

                     <td><h3>'.$row["city"].'</h3></td> 
                 <td><h3>'.$row["pin"].'</h3></td>  
                  <td><h3>'.$row["state"].'</h3></td> 
                  <td><h3>'.$row["country"].'</h3></td> 
                  <td><h3>'.$row["hobby_draw"].'</h3></td> 
                     <td><h3>'.$row["hobby_s"].'</h3></td> 
                 <td><h3>'.$row["hobby_dance"].'</h3></td>  
                  <td><h3>'.$row["hobby_c"].'</h3></td> 
                  <td><h3>'.$row["hobby_o"].'</h3></td> 
                  <td><h3>'.$row["o_hobby"].'</h3></td> 

                       <td><h3>'.$row["class_x_board"].'</h3></td> 
                 <td><h3>'.$row["class_x_percent"].'</h3></td>  
                  <td><h3>'.$row["class_x_passing"].'</h3></td> 
                  <td><h3>'.$row["class_xii_board"].'</h3></td> 
                  <td><h3>'.$row["class_xii_percent"].'</h3></td> 

                    <td><h3>'.$row["class_xii_passing"].'</h3></td> 
                 <td><h3>'.$row["c_bca"].'</h3></td>  
                  <td><h3>'.$row["c_bcom"].'</h3></td> 
                  <td><h3>'.$row["c_bsc"].'</h3></td> 
                  <td><h3>'.$row["c_ba"].'</h3></td> 

                <td><button type="submit" name="submit" class="submit-btn1"><a href="stu_tbl.php?id=<?php echo $row["id"]; ?>BACK</a></button></td>

                </td>


       
        
              </tr> ';
  }
}

  
?>
</table>
</body>
</html>