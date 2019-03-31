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



   
    </nav>
  </header>
  <div class="hhhh"></div>



 <main>

  <?php
        $con = mysqli_connect('127.0.0.1','root','');
        if(!$con)
      {
        echo 'Not Connected To Server';
    
      }
   if(!mysqli_select_db($con,'exam'))
      {
          echo 'Database Not Selected';    
      } 

         $cpp     = "select * from cpp order by marks desc";
         $java    = "select * from java order by marks desc";
         $cresult =  mysqli_query($con,$cpp);
         $jresult =  mysqli_query($con,$java);



         

      ?>
    <div class= "hhhh">
    

    </div>
       

     <div class= "test1" style=" float: left;background-image: linear-gradient(to right, purple, red);margin-left: 40px;padding-top: 50px;padding-bottom: 50px;padding-right: 35px;border-radius: 50px;padding-left: 20px"> 
       <div id = "quizheading" style=" font-size : 35px;max-width: 90% ;text-align:center; margin-left: 5%;padding-right: 100px;margin-bottom:30px ;background-image: linear-gradient(to right,orange, red); border-radius :7px;color:white!important;"><h1>C++ RANKING</h1>
    </div>
      <?php        
        echo '<table> ';
        echo '<tr> <th>Rank</th><th>Name</th><th>Email</th><th>Marks</th></tr> ';
         $count = 1;

         while($row = mysqli_fetch_array($cresult))
            {


              echo "<tr><td>". $count. "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>".$row['marks']."</td></tr>";
              $count++;
            }

           echo "</table>"; 

        ?></div>

  <div class= "test1" style="float: right;background-image: linear-gradient(to right, purple, red);margin-left: 20px;padding-top: 50px;padding-bottom: 50px;padding-right: 35px  ;border-radius: 50px;padding-left: 20px">
     <div id = "quizheading" style=" font-size : 35px;max-width: 90% ;text-align:center; margin-left: 5%;padding-right: 100px;margin-bottom:30px ;background-image: linear-gradient(to right,orange, red); border-radius :7px;color:white!important;"><h1>JAVA RANKING</h1>
    </div>

    <?php    
    
        echo '<table>';
        echo '<tr> <th>Rank</th><th>Name</th><th>Email</th><th>Marks</th></tr> ';
         $count = 1;

         while($row = mysqli_fetch_array($jresult))
            {


              echo "<tr><td>". $count. "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>".$row['marks']."</td></tr>";
                            $count++;

            }

           echo "</table>"; 

        ?></div>



</main>









</body>
</html>
