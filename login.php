<?php
include 'db.php';

   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
       $type = mysqli_real_escape_string($conn,$_POST['type']); 

      
      $sql = "SELECT `name`,`password` FROM `$type` WHERE `email` = '$myusername'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $pass=$row['password'];
            $username=$row['name'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      
       //  session_register("myusername");
          
       if($count==1)
       {
        if($mypassword==$pass)
        {
       
      // If result matched $myusername and $mypassword, table row must be 1 row
         $_SESSION['uname'] = $username;
        
         if($type=='users'){
              echo $_SESSION['uname'];
              echo "<script>
      alert('Logged In Successfully as user!!!');
    </script>";
              echo "<script>window.location.href='electrical.php';</script>";
          }             
          else
          {
            echo $_SESSION['uname'];
             echo "<script>
      alert('Logged In Successfully as Worker!!!');
    </script>";
            echo "<script>window.location.href='inbox_user.php';</script>";
          }
    
        }
        else{
          echo "<script>
      alert('Password`s dont match!!!');
    </script>";
      echo "<script>window.location.href='login.html';</script>";
        }
       }
       else{
           echo "<script>
      alert('Invalid Data Entry!!!');
    </script>";
      echo "<script>window.location.href='login.html';</script>";
       }
  
 mysqli_free_result($result);
      mysqli_close($conn);
 
}
     
?> 