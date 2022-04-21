<?php
   include 'config.php';
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from student where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
   $id_session = $row['id'];
   $name_session = $row['name'];
   $email_session = $row['email'];

   
   if(!isset($_SESSION['login_user'])){
      header("location:sign-in.php");
      die();
   }
?>