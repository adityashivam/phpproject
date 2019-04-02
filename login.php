<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
   <script> 
function validateform(){  
  var name=document.register.email.value;  

  if (name==null || name==""){  
  alert("Email can't be blank");  
  return false;  
}

  var password=document.register.psw.value;  

  if (password==null || password==""){  
  alert("password cannot be left blank");  
  return false;  
}
  }
</script> 
<link rel = "stylesheet" type= "text/css" href="style.css">

  <title>ONLINE EXAMINATION SYSTEM</title>
</head>
<body>
  <header>
    <div class="title1">
      <span>HireMe.In</span>
    </div>
    <nav class="navright">
       <a class="navigation-item" href="Subjects.php">Subjects</a>
      <a class="navigation-item"  href="Leaderboard.php">Leaderboard</a>
      <a class="navigation-item" href="home.php">About Us</a>
     <a class="navigation-home" href="register.php">Register</a>
   
    </nav>
  </header>
  <div class="hhhh"></div>
  <main>
     <article>
      <h1>LOGIN HERE AND CHECK YOURSELF</h1>

     </article>    



  </main>
  <div class="hhh"></div>
  <aside>


   <?php

   if(!mysqli_select_db())
      {
          echo 'Database Not Selected';    
      } 
 
   $Email = $_POST['email'];
   $Pass  = $_POST['psw'];
   $_SESSION["Email"] = $Email;
 




   $check = "select * from register where Email = '$Email'";
  

 $result =  mysqli_query($con,$check);
 $num =  mysqli_num_rows($result);
 if($num ==1)
   { 
      $row = mysqli_fetch_array($result);
      $_SESSION["Name"] = $row["Name"];
      if($row["Password"]==$Pass)
       header('Refresh: 0; URL=http://localhost/aditya/welcome.php');
      
      else {
        
   
           echo '<h1 style="color:red;margin-left:20px;">Wrong Details Entered, Enter Again</h1>';


         }
     
   }
 
 else {
        
   
           echo '<h1 style="color:red;margin-left:20px;">Wrong Details Entered, Enter Again</h1>';


        }
    }
      
   ?>

    
      <form  name = "register" method = "post" onsubmit = "return validateform()">
  <div class="container">
    <h1>Login</h1>
    <br>

    <label for="email"></label>
    <input type="text" placeholder="Enter Email" name="email">

    <label for="psw"></label>
    <input type="password" placeholder="Enter Password" name="psw">
    <hr>

    <button type="submit" name = "login" class="registerbtn">Login</button>
  </div>

 
</form>


  </aside>
</body>
</html>
