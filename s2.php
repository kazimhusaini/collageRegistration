<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/style1.css">



<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Phone Number</th>
<th>City</th>
<th>Street</th>
<th>Postal Code</th>
<th>Address</th>
<th>Selected Orders</th>
<th>Shawarma Price</th>
<th>Prawnfish Price</th>
<th>Pizza Prices</th>
<th>Sandwich Prices</th>
<th>Burger Prices</th>
<th>Fish Dish Price</th>
<th>Chicken Noodle Prices</th>
<th>Fry Fish Price</th>
<th>Juices Price</th>
<th>Action</th>

</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "beirut");


if(isset($_POST['button'])){   

  $search=$_POST['search'];

$result = mysqli_query($conn,"SELECT * FROM `user_orders` WHERE  
id like '%{$search}%' 
||uo_name like '%{$search}%' 
||uo_phone like '%{$search}%'
||uo_city like '%{$search}%' 
||uo_street like '%{$search}%'

||uo_postal like '%{$search}%' 
||uo_address like '%{$search}%'
||uo_selected_order like '%{$search}%' 
||shawarmaprice like '%{$search}%'
||prawnfishprice like '%{$search}%' 
||pizzaprice like '%{$search}%'
||sandwichprice like '%{$search}%' 
||burgerprice like '%{$search}%'
||fishdishprice like '%{$search}%' 
||noodleprice like '%{$search}%'
||fryfishprice like '%{$search}%' 
||juciesprice like '%{$search}%'
   ");

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
  echo '<tr> 
                 <td><h3>'.$row["id"].'</h3></td> 
                 <td><h3>'.$row["uo_name"].'</h3></td>  
                  <td><h3>'.$row["uo_phone"].'</h3></td> 
                  <td><h3>'.$row["uo_city"].'</h3></td> 
                  <td><h3>'.$row["uo_street"].'</h3></td> 

                    <td><h3>'.$row["uo_postal"].'</h3></td> 
                 <td><h3>'.$row["uo_address"].'</h3></td>  
                  <td><h3>'.$row["uo_selected_order"].'</h3></td> 
                  <td><h3>'.$row["shawarmaprice"].'</h3></td> 
                  <td><h3>'.$row["prawnfishprice"].'</h3></td> 

                    <td><h3>'.$row["pizzaprice"].'</h3></td> 
                <td><h3>'.$row["pizzaprice"].'</h3></td>  
                <td><h3>'.$row["sandwichprice"].'</h3></td> 
                <td><h3>'.$row["burgerprice"].'</h3></td> 
                <td><h3>'.$row["fishdishprice"].'</h3></td> 
                <td><h3>'.$row["noodleprice"].'</h3></td> 
                 <td><h3>'.$row["fryfishprice"].'</h3></td>  
                  <td><h3>'.$row["juciesprice"].'</h3></td> 

                  <td data-title="Action">
                  <a  href="userorder_updateform.php?id=<?php echo $row["id"]; ?>"class="at-viewbtn" ><i class="icon-show-eye"></i></a>
                  <a class="at-deletebtn" href="userorder_delete.php?id=<?php echo $row["id"]; ?>" ><i class="icon-delete"></i></a>
                </td>

       
        
              </tr> ';
  }
}else{
    echo "No data Found<br><br>";
  }

}
else{                         
  $result=mysqli_query("SELECT * FROM `user_orders` ");


  while ($row = mysqli_fetch_array($result)) {
    echo '<tr> 
    <td><h3>'.$row["id"].'</h3></td> 
    <td><h3>'.$row["uo_name"].'</h3></td>  
     <td><h3>'.$row["uo_phone"].'</h3></td> 
     <td><h3>'.$row["uo_city"].'</h3></td> 
     <td><h3>'.$row["uo_street"].'</h3></td> 

       <td><h3>'.$row["uo_postal"].'</h3></td> 
    <td><h3>'.$row["uo_address"].'</h3></td>  
     <td><h3>'.$row["uo_selected_order"].'</h3></td> 
     <td><h3>'.$row["shawarmaprice"].'</h3></td> 
     <td><h3>'.$row["prawnfishprice"].'</h3></td> 

       <td><h3>'.$row["pizzaprice"].'</h3></td> 
   <td><h3>'.$row["sandwichprice"].'</h3></td>  
   <td><h3>'.$row["burgerprice"].'</h3></td> 
   <td><h3>'.$row["fishdishprice"].'</h3></td> 
   <td><h3>'.$row["noodleprice"].'</h3></td> 
   <td><h3>'.$row["hobby_s"].'</h3></td> 
    <td><h3>'.$row["fryfishprice"].'</h3></td>  




     <td data-title="Action">
     <a  href="userorder_updateform.php?id=<?php echo $row["id"]; ?>"class="at-viewbtn" ><i class="icon-show-eye"></i></a>
      <a class="at-deletebtn" href="userorder_delete.php?id=<?php echo $row["id"]; ?>" ><i class="icon-delete"></i></a>
  </td>



</tr> ';
  }
}

  
?>
</table>
</body>
</html>