<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Login</title>
</script>
</head>
<body>
<div class="hero">
     <div class="form-box">
      	<div class="button-box">
      		<div id="btn"></div>
              <button  class="toggle_btn"onclick="login()"  type="button">Log In</button>
              <button  class="toggle_btn" onclick="register()"type="button">Register </button>           
       </div>
        <form id="login" class="input"border=1 action="login.php" method="POST">
          <input class="input-field" type="text" name=" e_name"value="" placeholder="User ID" required>
          <input  class="input-field" name="password" value=""type="password" placeholder="Enter password" require>
          <input type="checkbox" class="check-box"><span>Remember Password</span>
          <button type="submit" name="submit" class="submit-btn ">Log In</button>
        </form>
        <form id="register" class="input" border=1 action="signup_insert.php" method="POST">
          <input class="input-field" name="f_name" type="text" value="" placeholder="First-name" required>
          <input class="input-field" name="l_name" type="text" value="" placeholder="Last-name " required>
          <input class="input-field" name=" e_name"type="text" value="" placeholder="Email ID" required>
          <input  class="input-field" name="password"type="password" value="" placeholder="Enter password" require>
          <input type="checkbox" class="check-box">
          <span>I agree with this term of conditions</span>
          <button type="submit" name="submit" class="submit-btn">Register</button>
          <br>
          <button type="submit" name="submit" class="submit-btn"><a href="dash.php">Back</a></button>     
        </form>
    </div>
</div>

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




