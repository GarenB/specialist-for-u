<?php

 if(isset($_POST['SpecialistID'])) {

   include_once 'dbh.inc.php';



  /*  $SpecialistID=     $_POST['user_ID'];
    $star =    $_POST['star'];
    $Review=    $_POST['SpecialistID'];
    $user_ID=     $_POST['comment'];
*/


   $SpecialistID = mysqli_real_escape_string($conn, $_POST['SpecialistID']);
   $star = mysqli_real_escape_string($conn, $_POST['star']);
   $comment = mysqli_real_escape_string($conn, $_POST['comment']);
   $user_ID = mysqli_real_escape_string($conn, $_POST['user_ID']);

   //Error handlers
   //Check for empty fields



     //Check if input characters are valid


       //Check if email is valid
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


         $sql = "SELECT * FROM review WHERE review_user_id='$user_ID' AND review_specialist_id='$SpecialistID' ";
         $result = mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);

         if($resultCheck > 0){
        //   echo "<script type='text/javascript'>
        //   alert('You already reviewed this specialist');
        //   </script>";
          // header("Location: ../index.php?review=alreadyreviewed");

             echo "<script>window.location.href='\profile.php'; alert('You already reviewed this specialist !');</script>";
           exit();
         }
         else{

           //Insert the user into the database
           $sql = "INSERT INTO review (review_specialist_id, review_rating, review_text, review_user_id) VALUES ('$SpecialistID', '$star', '$comment', '$user_ID');";
           mysqli_query($conn, $sql);
           //header("Location: ../index.php?review=success");
            echo "<script>window.location.href='\profile.php'; alert('You successfuly reviewed this specialist !');</script>";
           exit();



   }

}
 }
 else{
   header("Location: ../index.php");
   exit();
 }
