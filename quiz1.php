<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  

<link rel = "stylesheet" type= "text/css" href="style.css">


  <title>HireMe.In</title>

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
  <main style="width: 80%">
   <form method="post" style="margin-left:25% ;background-color : #5be0ff ;border-radius: 20px"> 
    <br>
    <div id = "quizheading" style=" font-size : 35px;max-width: 50% ;text-align:center; margin-left: 25%;margin-bottom:30px ;background-image: linear-gradient(to right,orange, red); border-radius :7px;color:white!important;"><h1>JAVA TEST</h1>
    </div>
<br>
<div style="color:purple;margin-left:40px; font-size: 25px">Q1 - Which of this keyword can be used in a subclass to call the constructor of superclass?<BR></div>
<div style="color:blue;margin-left:92px; font-size: 22px">
<input type="radio" name="Q1" value="A">A - super<BR>
<input type="radio" name="Q1" value="B">B - this<BR>
<input type="radio" name="Q1" value="C">C - extent<BR>
<input type="radio" name="Q1" value="D">D - extends<BR>

</div>

<br>
<div style="color:purple;margin-left:40px; font-size: 25px">Q 2 - What is the process of defining a method in a subclass having same name & type signature as a method in its superclass?<BR></div>
<div style="color:blue;margin-left:92px; font-size: 22px">
<input type="radio" name="Q2" value="A">A - Method overloading<BR>
<input type="radio" name="Q2" value="B">B - Method overriding<BR>
<input type="radio" name="Q2" value="C">C - Method hiding<BR>
<input type="radio" name="Q2" value="D">D - None of the mentioned<BR>

</div>
<br>
<div style="color:purple;margin-left:40px; font-size: 25px">Q 3 -  Which of these keywords can be used to prevent Method overriding?<BR></div>
<div style="color:blue;margin-left:92px; font-size: 22px">
<input type="radio" name="Q3" value="A">A - static<BR>
<input type="radio" name="Q3" value="B">B - constant<BR>
<input type="radio" name="Q3" value="C">C - protected<BR>
<input type="radio" name="Q3" value="D">D - final<BR>

</div>
<br>

<div style="color:purple;margin-left:40px; font-size: 25px">Q 4 - Which of these is correct way of calling a constructor having no parameters, of superclass A by subclass B?<BR></div>
<div style="color:blue;margin-left:92px; font-size: 22px">
<input type="radio" name="Q4" value="A">A - super(void);<BR>
<input type="radio" name="Q4" value="B">B - superclass.();<BR>
<input type="radio" name="Q4" value="C">C - super.A();<BR>
<input type="radio" name="Q4" value="D">D - super();<BR>
<br>

</div>
<div style="color:purple;margin-left:40px; font-size: 25px">Q 5 - Which of these is supported by method overriding in Java?<BR></div>
<div style="color:blue;margin-left:92px; font-size: 22px">
<input type="radio" name="Q5" value="A">A - Abstraction<BR>
<input type="radio" name="Q5" value="B">B - Encapsulation<BR>
<input type="radio" name="Q5" value="C">C - Polymorphism<BR>
<input type="radio" name="Q5" value="D">D - None of the mentioned.<BR>

</div>



<br>
<br>
<br>
<br>
<input type="submit" class="registerbtn" name="quiz" style="max-width: 95% ;margin-left: 16px;margin-bottom:30px ;background-image: linear-gradient(to right, red, blue); border-radius :7px" value="SUBMIT ">
 


</form>
  </main>
 <div>
  <aside class="home" style="margin-top:15%;font-size:50px; margin-left:2px; width:20%;">
        <?php
     session_start();
     $name =  $_SESSION["Name"];
     $email = $_SESSION["Email"];

     if (isset($_POST['quiz']))
     {
      $con = mysqli_connect('127.0.0.1','root','');
  
    if(!$con)
      {
        echo 'Not Connected To Server';
      }
    if(!mysqli_select_db($con,'exam'))
      {
          echo 'Database Not Selected';    
      } 
 
   $q1 = $_POST['Q1'];
   $q2 = $_POST['Q2'];
   $q3 = $_POST['Q3'];
   $q4 = $_POST['Q4'];
   $q5 = $_POST['Q5'];

   $count = 0;

   if($q1=="A")
    $count++;
   if($q2=="B")
    $count++;
   if($q3=="D")
    $count++;
   if($q4=="D")
    $count++;
   if($q5=="C")
    $count++;

    $sql = "INSERT INTO java (name,email,marks) VALUES ('$name','$email','$count')";
   
     mysqli_query($con,$sql);

     $_SESSION["score"] = $count; 

   header('Location: http://localhost/aditya/score.php');

   


    }
    
   ?>
   


</aside>
</div>
<br />
<div class="hhh"> </div>

  
 
  <div class="hhh"></div>
  <footer>
    <div class="foot">
         © 2011–2019 Hireme, Inc.</div> 
  </footer>
</body>
</html>
