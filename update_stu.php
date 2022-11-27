<?php

$conn = mysqli_connect("localhost", "root", "", "project");

if(count($_POST)>0) {





mysqli_query($conn,"UPDATE student_record set  id='" . $_POST['id'] . "',
  f_name='" . $_POST['f_name'] . "',

   l_name='" . $_POST['l_name']  . "',



   email='" . $_POST['email'] . "' ,

   mnumber='" . $_POST['mnumber'] . "' ,



  addres='" . $_POST['addres'] . "' ,

  city='" . $_POST['city'] . "' ,

  pin='" . $_POST['pin'] . "' ,

  state='" . $_POST['state'] . "' ,

  country='" . $_POST['country'] . "' ,



  class_x_board='" . $_POST['class_x_board'] . "',

 class_x_percent='" . $_POST['class_x_percent'] . "' ,

class_x_passing='" . $_POST['class_x_passing'] . "' ,

class_xii_board='" . $_POST['class_xii_board'] . "' ,

 class_xii_percent='" . $_POST['class_xii_percent'] . "' ,

class_xii_passing='" . $_POST['class_xii_passing'] . "' ,


  WHERE id='" . $_POST['id'] . "'");


$message = "Record Modified Successfully";




}

$result = mysqli_query($conn,"SELECT * FROM student_record WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>

<html>
<head>
<title>Update of Student Registration Form</title>

</head>
 <link rel="stylesheet" type="text/css" href="css/stylestu.css">
<body>
  <div class="back">
<div class="container">
    <header class="header">
        
       <a class="link-title" href="/"> update of Student Registration</a>
        
    </header>
    
    <nav class="menu">
        
        <a href="index.php">Home</a> &nbsp; &nbsp; &nbsp; 
        <a href="student.php">Student-Registration</a> &nbsp; &nbsp; &nbsp;
         <a href="stu_tbl.php">Student-Record</a> &nbsp; &nbsp; &nbsp;
        <a href="about.php">About us</a> &nbsp; &nbsp; &nbsp; 
        <a href="contact.php">Contact</a>&nbsp; &nbsp; &nbsp;
         <a href="update.php">Profile</a>&nbsp; &nbsp; &nbsp;

        <a href="signup.php">Logout</a>
          <form action="sera.php"  method="post">

  <input id="search" name="search" type="search" autofocus><input type="submit" name="button">

</form>
    </nav>
  
<h3>STUDENT REGISTRATION FORM</h3>

   <form  border=1 action="" method="POST"> 
<table id="" align="center" cellpadding = "10">


<tr>
<td>ID</td>
<td><input type="hidden" name="id" value="<?php echo $row['id']; ?>" maxlength="30"/>
</td>
</tr>

<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="f_name"value="<?php echo $row['f_name']; ?>" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="l_name"value="<?php echo $row['l_name']; ?>" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<select name="bday" id="Birthday_Day" >
<option value="not_selected">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="bmonth" name="b_Month" >
<option value="">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="byear" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>a
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email" maxlength="100"value="<?php echo $row['email']; ?>" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mnumber" maxlength="11" value="<?php echo $row['mnumber']; ?>"/>
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="gender" value="Male" />
Female <input type="radio" name="gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><input name="addres" rows="4"value="<?php echo $row['addres']; ?>" cols="30"></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="city" maxlength="30" value="<?php echo $row['city']; ?>"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="pin" maxlength="6" value="<?php echo $row['pin']; ?>"/>
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="state" maxlength="30" value="<?php echo $row['state']; ?>"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="country" maxlength="30" value="<?php echo $row['country']; ?>" />
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>HOBBIES <br /><br /><br /></td>
 
<td>
Drawing
<input type="checkbox" name="hobby_draw" value="Drawing" />
Singing
<input type="checkbox" name="hobby_s" value="Singing" />
Dancing
<input type="checkbox" name="hobby_dance" value="Dancing" />
Sketching
<input type="checkbox" name="hobby_c" value="Cooking" />
<br />
Others
<input type="checkbox" name="hobby_o" value="Other" >
<input type="text" name="o_hobby" maxlength="30"/>
</td>
</tr>
 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" name="class_x_board" maxlength="30" value="<?php echo $row['class_x_board']; ?>"/></td>
<td><input type="text" name="class_x_percent" maxlength="30"value="<?php echo $row['class_x_percent']; ?>" /></td>
<td><input type="text" name="class_x_passing" maxlength="30" value="<?php echo $row['class_x_passing']; ?>"/></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="class_xii_board" maxlength="30" value="<?php echo $row['class_xii_board']; ?>"/></td>
<td><input type="text" name="class_xii_percent" maxlength="30" value="<?php echo $row['class_xii_percent']; ?>"/></td>
<td><input type="text" name="class_xii_passing" maxlength="30"value="<?php echo $row['class_xii_passing']; ?>" /></td>
</tr>
 

<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>
 
<!----- Course ---------------------------------------------------------->
<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
BCA
<input type="radio" name="c_bca" value="BCA" >
B.Com
<input type="radio" name="c_bcom" value="B.Com">
B.Sc
<input type="radio" name="c_bsc" value="B.Sc">
B.A
<input type="radio" name="c_ba" value="B.A" >
</td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">

      <button type="submit" name="submit" class="submit-btn">Submit</button></td></tr></td></tr>


    </table>


</form></div></div></body></html>




