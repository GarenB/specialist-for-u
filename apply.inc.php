<?php

 if(isset($_POST['apply'])) {

   include_once 'dbh.inc.php';

   $first = mysqli_real_escape_string($conn, $_POST['first']);
   $last = mysqli_real_escape_string($conn, $_POST['last']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $spec = mysqli_real_escape_string($conn, $_POST['spec']);
   $city = mysqli_real_escape_string($conn, $_POST['city']);
   //Error handlers
   //Check for empty fields


     //Check if input characters are valid


       //Check if email is valid


         $sql = "SELECT * FROM apply WHERE email='$email'";
         $result = mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);

         if($resultCheck > 0){
              echo "<script>window.location.href='\login.php';alert('You already signed up with this email !');</script>";
           exit();
         }
         else{

           $sql = "INSERT INTO apply (first, last, email, numba, specialization, city) VALUES ('$first', '$last', '$email', '$number', '$spec' , '$city');";
           mysqli_query($conn, $sql);


           echo "<script>window.location.href='\index.php';alert('You successfuly applied !');</script>";




           exit();
         }
       }





 else{
   header("Location: ../signup.php");
   exit();
 }
