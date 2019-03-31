<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">

<link rel = "stylesheet" type= "text/css" href="style.css">

  <title>ONLINE EXAMINATION SYSTEM</title>
</head>
<body>
  <header>
    <div class="title1">
      <span>HireMe.In</span>
    </div>
    <nav class="navright">
             <a class="navigation-item"  href="Leaderboard.php">Leaderboard</a>

      <a class="navigation-item" href="welcome.php">Home</a>

     <a class="navigation-home" href="login.php">Logout</a>

   
    </nav>
  </header>
  <div class="hhhh"></div>



 <main>

  <?php

    session_start();
     $score = $_SESSION["score"];

     echo '<h1 style = " color:grey;margin-left: 150px;margin-bottom:30px ;background-image: linear-gradient(to right, red, orange); border-radius :7px;padding-right: 100px;padding-top:10px;padding-bottom:10px;padding-left: 100px">Your Score = >  <br>'.' '.$score.'</h1>';

      ?>
    <div class= "hhhh">
    

    </div>
 


</main>









</body>
</html>
