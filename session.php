<?php

   session_start();
   

   if(isset($_SESSION['uname'])){
       $user=$_SESSION['uname'];
   } 

   if(!isset($_SESSION['uname'])){
      
       echo "<script>
      window.location='login.html';
    </script>";
   } 
?>