<?php

 if(isset($_POST['Delete'])) {

   include_once 'dbh.inc.php';



  /*  $SpecialistID=     $_POST['user_ID'];
    $star =    $_POST['star'];
    $Review=    $_POST['SpecialistID'];
    $user_ID=     $_POST['comment'];
*/


   $reviewiD= mysqli_real_escape_string($conn, $_POST['Delete']);

   //Error handlers
   //Check for empty fields



     //Check if input characters are valid


       //Check if email is valid



           //Insert the user into the database
           $sql="DELETE FROM review WHERE review_id='$reviewiD'";
           mysqli_query($conn, $sql);
           echo "<script>window.location.href='\profile.php'; alert('Your review was successfully deleted !');</script>";
           //header("Location: ../index.php?delete=success");
           exit();






 }
 else{
   header("Location: ../index.php");
   exit();
 }
