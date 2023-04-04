<?php
session_start();

 if(isset($_POST['contactus'])) {

   include_once 'dbh.inc.php';

   $text = mysqli_real_escape_string($conn, $_POST['text']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);

   echo($text);
   echo($email);


   //Error handlers
   //Check for empty fields
  // if(empty($text)){
     //header("Location: ../header.php?signup=empty");
//     echo "<script>window.location.href='\contactUs.php';alert('Please enter message !');</script>";
//     exit();
//   }
    if(empty($email)){
     if (isset($_SESSION['u_id'])){

       $email=$_SESSION['u_email'];
         $sql = "INSERT INTO contactus (email, message) VALUES ('$email', '$text');";
         mysqli_query($conn, $sql);



         echo "<script>window.location.href='\index.php';alert('Your message was successfuly sent !');</script>";
         exit();
}



    else{
      echo "<script>window.location.href='\ContactUs.php';alert('Please enter email if you are not logged in !');</script>";
      exit();
    }


   }
   else{
     $sql = "INSERT INTO contactus (email, message) VALUES ('$email', '$text');";
     mysqli_query($conn, $sql);



     echo "<script>window.location.href='\index.php';alert('Your message was successfuly sent !');</script>";
     exit();
   }


 }
 else{
   header("Location: ../signup.php");
   exit();
 }
