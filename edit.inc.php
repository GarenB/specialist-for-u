<?php

 if(isset($_POST['SpecialistID22'])) {

   include_once 'dbh.inc.php';



  /*  $SpecialistID=     $_POST['user_ID'];
    $star =    $_POST['star'];
    $Review=    $_POST['SpecialistID'];
    $user_ID=     $_POST['comment'];
*/


   $SpecialistID = mysqli_real_escape_string($conn, $_POST['SpecialistID22']);
   $star = mysqli_real_escape_string($conn, $_POST['star']);
   $comment = mysqli_real_escape_string($conn, $_POST['comment']);
   $user_ID = mysqli_real_escape_string($conn, $_POST['user_ID']);
   $reviewiD= mysqli_real_escape_string($conn, $_POST['review_ID']);

   //Error handlers
   //Check for empty fields



     //Check if input characters are valid


       //Check if email is valid



//echo $comment;
//echo $star;
//echo $reviewiD;


if(empty($comment) AND $star==0 ){
  //header("Location: ../index.php?login=empty");
  echo "<script>window.location.href='\profile.php'; alert('Star rating is required !');</script>";
  exit();
}
else if(empty($comment) AND $star==null ){
  //header("Location: ../index.php?login=empty");
  echo "<script>window.location.href='\profile.php'; alert('Star rating is required !');</script>";
  exit();
}
else if($star==0 || $star==null ){
  //header("Location: ../index.php?login=empty");
  echo "<script>window.location.href='\profile.php'; alert('Star rating is required !');</script>";
  exit();
}
else{

           //Insert the user into the database
           $sql="UPDATE review SET review_text='$comment', review_rating='$star' WHERE review_id='$reviewiD'";
           mysqli_query($conn, $sql);
           echo "<script>window.location.href='\profile.php'; alert('Your review was successfully edited !');</script>";
           //header("Location: ../index.php?edit=success");
           exit();






 }
}
