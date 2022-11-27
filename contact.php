<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style1.css">
    <script src="js/scripts.js"></script>
</head>
 <div class="back">
<body id="contact">
  
  <div class="container">
     <header class="header">
        
        <a class="link-title" href="/">Contact</a>
        
    </header>
    
    <nav class="menu">
        
        <a href="index.php">Home</a> &nbsp; &nbsp; &nbsp; 
          <a href="student.php">Student-Registration</a> &nbsp; &nbsp; &nbsp;
           <a href="stu_tbl.php">Student-Record</a> &nbsp; &nbsp; &nbsp;
        <a href="about.php">About us</a> &nbsp; &nbsp; &nbsp; 
        <a href="contact.php">Contact</a>&nbsp; &nbsp; &nbsp; 
         <a href="update.php">profile</a>&nbsp; &nbsp; &nbsp;
        <a href="signup.php">Logout</a>
   <form action="sera.php" method="post">

  <input id="search" name="search" type="search" autofocus><input type="submit" name="button">

</form>
    </nav>
    
    <aside>
       
       <h1>CONTACT-US</h1>
        
        
    </aside>
    
    <article class="main">
    
       <h1 class="page-heading">Contact</h1>
       
       <div id="form">
          
          <form method="post" action="process.php">
              
              <p>
              <label for="name">Name:</label>
              <input type="text" name="name" placeholder="Your Name" >
              
              </p>
              
              <p>
              <label for="name">Email:</label>
              <input type="text" name="email" required>
              
              </p>
              
              <label for="name">Subject:</label>
              <input type="text" name="subject" required>
              
              
                  
            <p> 
            <label for="message"></label>
            <textarea id="message" name="body" id="" cols="30" rows="10" required></textarea>
              </p> 
              
              <p>
                  <!-- <input id="submit" type="submit" name="submit" value="Send Message"> -->

              </p>
              
              <button type="submit" name="submit">next</button>
              
              
          </form>
           
           
           </div>
           
           
           
           
   
  
 








    </article>
    
    
     <footer>
        
            &copy; 2020 Minimal Website &nbsp;<span class="separator">|</span>design by Syed Muhammad Kazim Husaini & Syed Abdul-rehman <a href=""></a>
        
        
        
    </footer>
     

        
       </div>
    </div>

</body>
</html>