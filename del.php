<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if(count($_POST)>0) {


mysqli_query($conn,"UPDATE signup set id='" . $_POST['id'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', password='" . $_POST['password'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";


}

$result = mysqli_query($conn,"SELECT * FROM signup WHERE id='" . $_GET['id'] . "'");
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


   <form id="login" class="input" border=1 action="delete_confirm.php" method="POST" >
   <input type="hidden" name="id"placeholder="ID" class="input-field" value="<?php echo $row['id']; ?>">
<input type="text" name="id "  class="input-field"  value="<?php echo $row['id']; ?>">
     <button type="submit" name="update" class="submit-btn"><a>Delete</a></button>
<br>
 <button type="submit" name="submit" class="submit-btn"><a href="update.php">Back</a></button>
                
        </form>

        <form id="register" class="input" border=1 action="" method="POST">
  


<input type="hidden" name="id"placeholder="ID" class="input-field" value="<?php echo $row['id']; ?>">
<input type="text" name=id   class="input-field"  value="<?php echo $row['id']; ?>">
<br>

<input type="text" name="first_name" class="input-field" placeholder="First-name"value="<?php echo $row['first_name']; ?>">
<input type="text" name="last_name" class="input-field"placeholder="Last-name" value="<?php echo $row['last_name']; ?>">
<input type="text" name="email" class="input-field" placeholder="Email"value="<?php echo $row['email']; ?>">

<input type="text" name="password" class="input-field"placeholder="Password" value="<?php echo $row['password']; ?>">


<br>
<input type="submit" name="submit" value="Submit" class="submit-btn">
<br>
 <button type="submit" name="submit" class="submit-btn"><a href="update.php"><b>Back</b></a></button>


</form>
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













