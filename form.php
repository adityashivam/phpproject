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
 
   $Name = $_POST['name'];
   $Email = $_POST['email'];
   $Pass = $_POST['pass'];
   $Date =$_POST['date'];  
   
   $check = "select * from register where Email = '$Email'";
   $sql = "INSERT INTO register (Name,Email,Password,Date) VALUES ('$Name','$Email','$Pass','$Date')";

 $result =  mysqli_query($con,$check);
 $num =  mysqli_num_rows($result);
 if($num ==1)
   { 
     echo "Email id ALready Registered";
      
   }
 
 else {
        $result = mysqli_query($con,$sql);
   
           echo 'Inserted';
           header('location:Login.htm');
        }
      
   ?>
   
