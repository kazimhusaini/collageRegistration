
<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if(count($_POST)>0) {


mysqli_query($conn,"UPDATE `student_record` set 
  id='" . $_POST['id'] . "',
   f_name='" . $_POST['f_name'] . "', 
   l_name='" . $_POST['l_name'] . "',
    bday='" . $_POST['bday'] . "' ,
     bmonth='" . $_POST['bmonth'] . "' ,
      byear='" . $_POST['byear'] . "' ,
       email='" . $_POST['email'] . "' ,
        mnumber='" . $_POST['mnumber'] . "' ,
         gender='" . $_POST['gender'] . "' ,
          addres='" . $_POST['addres'] . "' ,
           city='" . $_POST['city'] . "' ,
            pin='" . $_POST['pin'] . "' ,
             state='" . $_POST['state'] . "' , 
             country='" . $_POST['country'] . "' ,
              hobby_draw='" . $_POST['hobby_draw'] . "' ,

               hobby_s='" . $_POST['hobby_s'] . "' ,
                hobby_dance='" . $_POST['hobby_dance'] . "' ,
                 hobby_c='" . $_POST['hobby_c'] . "' ,
                  hobby_o='" . $_POST['hobby_o'] . "' ,
                   o_hobby='" . $_POST['o_hobby'] . "' ,
                    class_x_board='" . $_POST['class_x_board'] . "', 
                    class_x_percent='" . $_POST['class_x_percent'] . "' ,
                     class_x_passing='" . $_POST['class_x_passing'] . "' ,
                      class_xii_board='" . $_POST['class_xii_board'] . "' ,
                       class_xii_percent='" . $_POST['class_xii_percent'] . "' ,
                        class_xii_passing='" . $_POST['class_xii_passing'] . "' ,
                         c_bca='" . $_POST['c_bca'] . "' ,
                          c_bcom='" . $_POST['c_bcom'] . "' ,
                           c_bsc='" . $_POST['c_bsc'] . "' ,
                            c_ba='" . $_POST['c_ba'] . "'  WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";




}

$result = mysqli_query($conn,"SELECT * FROM `student_record` WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);



?>
<html>
<head>

<title>Update signup Data</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div class="hero">
     <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
            
              <button  class="toggle_btn"onclick="login()"  type="button"><b>Delete</b></button>
              <button  class="toggle_btn" onclick="register()"type="button"><b>Update </b></button>
            
       </div>

  <form id="login" class="input" border=1 action="delete2confirm.php" method="POST" >
   <input type="hidden" name="id"placeholder="ID" class="input-field" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  class="input-field"  value="<?php echo $row['id']; ?>" >
     <button type="submit" name="update" class="submit-btn"><a>Delete</a></button>
<br>  
 <button type="submit" name="submit" class="submit-btn"><a href="stu_tbl.php">Back</a></button>

                
        </form>

  </form>

        <form id="register" class="input" border=1 action="update_stu.php" method="POST">
  <input type="submit" name="submit" value="Submit" class="submit-btn">
<br>
 <button type="submit" name="submit" class="submit-btn"><a href="stu_tbl.php"><b>Back</b></a></button>
</div></div>




<script >
  var x=document.getElementById("login");
  var y=document.getElementById("register");
  var z=document.getElementById("btn");

  function register()
   {
    x.style.left="-400px";
    y.style.left="50px";
    z.style.left="110px";

  }
  function login()
   {
    x.style.left="50px";
    y.style.left="450px";
    z.style.left="0";

  }
</script>

</body>
</html>













