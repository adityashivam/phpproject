<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script> 
function validateform(){  
  var name=document.register.name.value;  

  if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}

  var x = document.register.email.value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    alert("Not a valid e-mail address");
    return false;
  }    



var a = document.getElementById("psw").value;
var b = document.getElementById("psw-repeat").value;
  if (a==null || a==""){  
  alert("Pass can't be blank");  
  return false;  
}

  if (b==null || b==""){  
  alert("Confirm Pass can't be blank");  
  return false;  
}
  if(a!=b)
  {alert("Password not same")
  return false;
    }
  }
</script> 
<link rel = "stylesheet" type= "text/css" href="style.css">

  <title>HireMe.In</title>
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
      <a class="navigation-home" href="login.php">Login</a>
   
    </nav>
  </header>
  <div class="hhhh"></div>
  <main>
     <article>
      <h1>REGISTER ON OUR PLATFORM AND CHECK YOURSELF WHERE YOU STAND IN FRONT OF THE WORLD</h1>

     </article>    



  </main>
  <div class="hhh"></div>
  <aside>
    
    <?php

      
   ?>
   
   <form  method ="post" name="register" onsubmit="return validateform()">
    <div class="container">
    <BR>
    <label for="name"></label>
    <input type="text" placeholder="Enter name" name="name">
    <label for="email"></label>
    <input type="text" placeholder="Enter Email" name="email">
    <b> Enter DOB</B>
    <input type="date" name="date">
   
    <label for="psw"></label>
    <input type="password" placeholder="Enter Password" id="psw" name="pass">

    <label for="psw-repeat"></label>
    <input type="password" placeholder="Repeat Password" id="psw-repeat">
    <hr>

    <button type="submit" name = "signup" class="registerbtn">Register</button>
  </div>

 
</form>


  </aside>
</body>
</html>
